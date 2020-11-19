<?php

namespace App\Http\Requests\Admin\Reserva;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateReserva extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.reserva.edit', $this->reserva);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'data' => ['sometimes', 'string'],
            'qntd_lugares' => ['sometimes', 'string'],
            'cliente_id' => ['sometimes', 'string'],
            'resturante_id' => ['sometimes', 'string'],
            'observacao' => ['nullable', 'string'],
            
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
