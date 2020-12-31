<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'EST_numeroCuenta',
        'EST_registroEstatalSS',
        'EST_apellidoPaterno',
        'EST_apellidoMaterno',
        'EST_nombre',
        'EST_correo',
        'EST_edad',
        'EST_sexo',
        'EST_carrera',
        'EST_promedio',
        'EST_porcentajeCreditos',
        'EST_fechaNacimi',
        'EST_domicilio',
        'EST_rfc',
        'EST_curp',
        'EST_telefono',
        'EST_codigoPostal'
    ];


    //Relacion  1:1 entre estudiante y usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //Relacion entre estudiante y seguimiento
    public function seguimiento()
    {
        return $this->hasOne(Seguimiento::class);
    }
}
