<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    // se declaran que campos se van a poder editar por la api
    protected $fillable=[  
        'nombres','apellidos','edad','sexo','dni','tipo_sangre','telefono','correo','direccion'
    ];

    // defino los campos que no quiero que retorne la API
    protected $hidden=[
        'created_at','updated_at'
    ];
}
