<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPaciente;
use App\Http\Requests\GuardarPaciente;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paciente::all();          // trae toda la data de los pacientes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPaciente $request)
    {
        Paciente::create($request->all());      // crear instancia de Paciente con validaciones colocadas en Controllers/Requests/GuardarPaciente
        return response()->json([               // retorna una respuesta en JSON
            'res'=>true,
            'msg'=>'Paciente guardado correctamente.'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)        // para enviarle la PK del modelo PACIENTE
    {
        return response()->json([                   // Retorna JSON
            'res' => true,                          // con respuesta TRUE
            'paciente' => $paciente                 // y los datos del paciente
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPaciente $request, Paciente $paciente)
    {
        $paciente -> update($request->all());                   // actualizo la información del paciente con la información (validade) del request
        return response()->json([                               // Retorna JSON
            'res' => true,                                      // con respuesta TRUE
            'message' => 'Paciente actualizado correctamente.'
        ],200);                                                 // código de HTTP 200 quiere decir que todo está correcto
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente -> delete();
        return response()->json([                               // Retorna JSON
            'res' => true,                                      // con respuesta TRUE
            'message' => 'El paciente se eliminó correctamente.'
        ],200);
    }
}
