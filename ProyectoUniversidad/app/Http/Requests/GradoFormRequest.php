<?php

namespace ProyectoUniversidad\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'grado'=>'required | max:50'
        ];
    }
}
