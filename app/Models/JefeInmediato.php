<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JefeInmediato extends Model
{
    use HasFactory;
    //Relacion entre jefes inmediatos y entidades
    public function entidades(){
        return $this->hasOne(Entidad::class);
    }
}
