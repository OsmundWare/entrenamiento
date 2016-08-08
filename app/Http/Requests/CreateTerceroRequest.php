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

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'nit'=>'required|min:4|unique:terceros,nit',
                    'nombre'=>'required|min:3',
                    'rol'=>'required',
                    'direccion'=>'required',
                    'telefono'=>'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nit'=>'required|min:4|unique:terceros,nit,'.$tercero->id,
                    'nombre'=>'required|min:3',
                    'rol'=>'required',
                    'direccion'=>'required',
                    'telefono'=>'required'
                ];
            }
            default:break;
        }



    }
}
