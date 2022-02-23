<?php

use App\Http\Controllers\API\PacienteController;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Defino ruta
// ..:: MéttodoHTTP (identificador de la ruta,[Controlador::class,Función o método dentro del controller])
Route::get('pacientes',[PacienteController::class,'index']);

// ..:: MéttodoHTTP (identificador de la ruta,[Controlador::class,Función o método dentro del controller])
Route::post('pacientes',[PacienteController::class,'store']);

// ..:: MéttodoHTTP (identificador de la ruta,[Controlador::class,Función o método dentro del controller]
Route::get('pacientes/{paciente}',[PacienteController::class,'show']);
// al colocar {paciente}, va a usar el ID (PK) para retornar los datos

// ..:: MéttodoHTTP (identificador de la ruta,[Controlador::class,Función o método dentro del controller]
Route::put('pacientes/{paciente}',[PacienteController::class,'update']);
// al colocar {paciente}, va a usar el ID (PK) para retornar los datos

// ..:: MéttodoHTTP (identificador de la ruta,[Controlador::class,Función o método dentro del controller]
Route::delete('pacientes/{paciente}',[PacienteController::class,'destroy']);
// al colocar {paciente}, va a usar el ID (PK) para retornar los datos