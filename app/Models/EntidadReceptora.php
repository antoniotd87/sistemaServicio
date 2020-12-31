<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadReceptora extends Model
{
    use HasFactory;

    protected $fillable = [
        'ENR_nombre',
        'ENR_domicilio',
        'ENR_municipio',
        'ENR_telefono',
        'ENR_correo',
        'ENR_programaParticipa',
        'ENR_sector'
    ];

    //Relacion entre entidad receptora y entidades
    public function entidad(){
        return $this->hasOne(Entidad::class);
    }
}
