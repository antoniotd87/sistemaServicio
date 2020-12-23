<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    //Relacion  1:1 entre administrador y usuario
    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
