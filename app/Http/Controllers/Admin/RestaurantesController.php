<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Restaurante\BulkDestroyRestaurante;
use App\Http\Requests\Admin\Restaurante\DestroyRestaurante;
use App\Http\Requests\Admin\Restaurante\IndexRestaurante;
use App\Http\Requests\Admin\Restaurante\StoreRestaurante;
use App\Http\Requests\Admin\Restaurante\UpdateRestaurante;
use App\Models\Restaurante;
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

class RestaurantesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRestaurante $request
     * @return array|Factory|View
     */
    public function index(IndexRestaurante $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Restaurante::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nome', 'endereco', 'imagem', 'categoria', 'login', 'horario', 'phone', 'cellular', 'social', 'descricao'],

            // set columns to searchIn
            ['id', 'nome', 'endereco', 'imagem', 'categoria', 'login', 'horario', 'phone', 'cellular', 'social', 'descricao']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.restaurante.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.restaurante.create');

        return view('admin.restaurante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRestaurante $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreRestaurante $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Restaurante
        $restaurante = Restaurante::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/restaurantes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/restaurantes');
    }

    /**
     * Display the specified resource.
     *
     * @param Restaurante $restaurante
     * @throws AuthorizationException
     * @return void
     */
    public function show(Restaurante $restaurante)
    {
        $this->authorize('admin.restaurante.show', $restaurante);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Restaurante $restaurante
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Restaurante $restaurante)
    {
        $this->authorize('admin.restaurante.edit', $restaurante);


        return view('admin.restaurante.edit', [
            'restaurante' => $restaurante,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRestaurante $request
     * @param Restaurante $restaurante
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateRestaurante $request, Restaurante $restaurante)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Restaurante
        $restaurante->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/restaurantes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/restaurantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRestaurante $request
     * @param Restaurante $restaurante
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyRestaurante $request, Restaurante $restaurante)
    {
        $restaurante->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyRestaurante $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyRestaurante $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Restaurante::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
