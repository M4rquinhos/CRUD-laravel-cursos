<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ];
    }

    // Funcion para agregar a que pertenece el error
    public function attributes()
    {
        return [
            'name' => 'course name',
            'description' => 'course description',
            'category' => 'course category'
        ];
    }

    // funcion para personalizar los mensajes de error
    public function messages()
    {
        return [
            //
        ];
    }
}
