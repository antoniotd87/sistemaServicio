<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    //Relacion entre areas y entidades
    public function entidades(){
        return $this->hasOne(Entidad::class);
    }
}
