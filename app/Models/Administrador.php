<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'UA_numeroSP',
        'UA_nombre',
        'UA_apellidoPaterno',
        'UA_apellidoMaterno',
        'UA_correo',
        'UA_rol',
        'UA_cargo',
        'UA_fechaContratacion'
    ];

    //Relacion  1:1 entre administrador y usuario
    public function usuario(){
        return $this->belongsTo(User::class,'user_id');
    }
}
