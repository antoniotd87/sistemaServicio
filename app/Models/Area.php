<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'ARA_nombre',
        'ARA_nombreResponsable',
        'ARA_apellidoPaterno',
        'ARA_apellidoMaterno',
        'ARA_cargo',
        'ARA_correo',
        'ARA_telefono',
        'ARA_municipio',
        'ARA_calle',
        'ARA_codigoPostal'
    ];

    //Relacion entre areas y entidades
    public function entidades(){
        return $this->hasOne(Entidad::class);
    }
}
