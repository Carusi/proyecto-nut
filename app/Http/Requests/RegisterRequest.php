<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'usu_nombre' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'usu_apellido' => 'required',
        'usu_num_doc' => 'required|unique:usuarios,usu_num_doc',
        'usu_tipo_documento' => 'required',
        'usu_genero' => 'required',
        'usu_fch_nac'=>'required',
        'usu_eps'=> 'required',
        'usu_telefono' => 'required'
        ];
    }
}
