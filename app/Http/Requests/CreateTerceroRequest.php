<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Tercero;


class CreateTerceroRequest extends Request
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

        $tercero = Tercero::find($this->terceros);

        return [
            'nit'=>'required|min:4|unique:terceros,nit,'.$tercero->id,
            'nombre'=>'required|min:3',
            'rol'=>'required',
            'direccion'=>'required',
            'telefono'=>'required'
        ];

    }
}
