<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'apellidos' => 'required|string',
			'fNacimiento' => 'required|string',
			'sexo' => 'required|string',
			'cargo' => 'required|string',
			'fAlta' => 'required|string',
			'telefono' => 'required|string',
        ];
    }
}
