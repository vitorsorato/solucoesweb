<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
            'name' => 'required | min:3',
            'age'  => 'required | min: 1',
            'email'  => 'required | min: 5',
            'pessoasexo'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio',
            'name.min' => 'O campo nome precisa ter pelo menos dois caracteres',
            'age.required' => 'O campo idade é obrigatorio',
            'age.min' => 'O campo idade precisa ter pelo menos 1 caracter',
            'email.required' => 'O campo email é obrigatorio',
            'email.min' => 'O campo email precisa ter pelo menos cinco caracteres',
            'pessoasexo.required' => 'O campo sexo é obrigatorio',
        ];
    }
}