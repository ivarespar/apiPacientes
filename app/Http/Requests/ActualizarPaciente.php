<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPaciente extends FormRequest
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
            "nombres"=> "required",             // required: valida que el campo es obligatorio
            "apellidos"=> "required",
            "edad"=> "required",
            "sexo"=> "required",
            "dni"=> "required|unique:pacientes,dni,".$this->route('paciente')->id,        // valida que el campo 'dni' es único, y que permita el DNI si se está actualizando el mismo paciente
            "tipo_sangre"=> "required",
            "telefono"=> "required",
            "correo"=> "required",
            "direccion"=> "required"
        ];
    }
}
