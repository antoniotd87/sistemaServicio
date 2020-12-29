<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;
    //Relacion entre seguimiento y estudiantes
    public function estudiantes(){
        return $this->belongsTo(Estudiante::class);
    }
    //Relacion entre seguimiento y ebtidades
    public function entidades(){
        return $this->belongsTo(Entidad::class);
    }
    //Relacion entre seguimiento y fechas
    public function fechas(){
        return $this->belongsTo(Fecha::class);
    }
}
