<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //permitir la accion 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    //reglas de validacion
    public function rules(): array
    {
        return [
            //reglas de validacion
            'name' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'categoria' => 'required|string|max:255',
        ];
    }
    //creacion de metodo de validacion 
    public function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags($this->name),
            'descripcion' => strip_tags($this->descripcion),
            'categoria' => strip_tags($this->categoria),
        ]);
    }
}
