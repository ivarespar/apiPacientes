<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPaciente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;        // para autorizar usar el request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() // para crear reglas de validacion
    {
        return [
            "nombres"=> "required",             // required: valida que el campo es obligatorio
            "apellidos"=> "required",
            "edad"=> "required",
            "sexo"=> "required",
            "dni"=> "required|unique:pacientes,dni",        // valida que el campo 'dni' es único en la tabla 'pacientes'
            "tipo_sangre"=> "required",
            "telefono"=> "required",
            "correo"=> "required",
            "direccion"=> "required"
        ];
    }
}
