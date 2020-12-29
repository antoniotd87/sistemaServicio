<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadReceptora extends Model
{
    use HasFactory;
    //Relacion entre entidad receptora y entidades
    public function entidades(){
        return $this->hasOne(Entidad::class);
    }
}
