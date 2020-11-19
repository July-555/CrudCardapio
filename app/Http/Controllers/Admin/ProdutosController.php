<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Produto\BulkDestroyProduto;
use App\Http\Requests\Admin\Produto\DestroyProduto;
use App\Http\Requests\Admin\Produto\IndexProduto;
use App\Http\Requests\Admin\Produto\StoreProduto;
use App\Http\Requests\Admin\Produto\UpdateProduto;
use App\Models\Produto;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProdutosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProduto $request
     * @return array|Factory|View
     */
    public function index(IndexProduto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Produto::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nome', 'preco', 'immagem', 'categoria', 'descricao'],

            // set columns to searchIn
            ['id', 'nome', 'immagem', 'categoria', 'descricao']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.produto.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.produto.create');

        return view('admin.produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProduto $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProduto $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Produto
        $produto = Produto::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/produtos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param Produto $produto
     * @throws AuthorizationException
     * @return void
     */
    public function show(Produto $produto)
    {
        $this->authorize('admin.produto.show', $produto);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Produto $produto
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Produto $produto)
    {
        $this->authorize('admin.produto.edit', $produto);


        return view('admin.produto.edit', [
            'produto' => $produto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProduto $request
     * @param Produto $produto
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProduto $request, Produto $produto)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Produto
        $produto->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/produtos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProduto $request
     * @param Produto $produto
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProduto $request, Produto $produto)
    {
        $produto->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProduto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProduto $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Produto::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
