<?php

namespace App\Http\Requests\Admin\Restaurante;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRestaurante extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.restaurante.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'string'],
            'endereco' => ['required', 'string'],
            'imagem' => ['required', 'string'],
            'categoria' => ['required', 'string'],
            'login' => ['required', 'string'],
            'horario' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'cellular' => ['required', 'string'],
            'social' => ['nullable', 'string'],
            'descricao' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
