<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    //Relacion  1:1 entre estudiante y usuario
    public function usuario(){
        return $this->belongsTo(User::class);
    }
    //Relacion entre estudiante y seguimiento
    public function seguimiento(){
        return $this->hasOne(Seguimiento::class);
    }
}
