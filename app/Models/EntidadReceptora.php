<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadReceptora extends Model
{
    use HasFactory;

    protected $fillable = [
        'ENR_fechaEntrega',
        'ENR_nombre',
        'ENR_calle',
        'ENR_domicilio',
        'ENR_municipio',
        'ENR_codigoPostal',
        'ENR_telefono',
        'ENR_correo',
        'ENR_programaParticipa',
        'ENR_tipoEntidad',
        'ENR_actividades',
        'ENR_horario',
        'ENR_horaEntrada',
        'ENR_HoraSalida',
        'ENR_fechaInicio',
        'ENR_fechaTermino',
        'ENR_totalHoras',
        'ENR_sector',
        'ENR_estimulo'
    ];

    //Relacion entre entidad receptora y entidades
    public function entidad(){
        return $this->hasOne(Entidad::class);
    }
}
