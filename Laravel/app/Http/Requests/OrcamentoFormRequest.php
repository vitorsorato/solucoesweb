<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrcamentoFormRequest extends FormRequest
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
            'centrocusto' => 'required',
            'dataperiodo'  => 'required',
            'materiaprima'  => 'required',
            'despesaconservacao'  => 'required',
            'despesasveiculos'  => 'required',
            'despesastaxas'  => 'required',    
        ];
    }

    public function messages()
    {
        return [
            'centrocusto.required' => 'O campo centro de custo é obrigatorio',
            'dataperiodo.required' => 'O campo data é obrigatorio',
            'materiaprima.required' => 'O campo materia prima é obrigatorio',
            'despesaconservacao.required' => 'O campo despesa de conservação é obrigatorio',
            'despesasveiculos.required' => 'O campo despesa de veículos é obrigatorio',
            'despesastaxas.required' => 'O campo despesa de taxas é obrigatorio',

        ];
    }
}