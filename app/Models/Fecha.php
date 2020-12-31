<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;

    protected $fillable = [
        'FCH_fechaEntrega',
        'FCH_fechaInicio',
        'FCH_fechaTermino',
        'FCH_horario'
    ];

    //Relacion entre fechas y seguimiento
    public function seguimiento(){
        return $this->hasOne(Seguimiento::class);
    }
}
