<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TarjetaRequest extends Request
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
           'codigo' => 'required|alpha_num|Unique:tarjeta',
           'fecha_registro' => 'required|date',
           'comentario' => 'Alphaspace|alpha_num|max:150'
        ];
    }
}
