<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'entidad_receptora_id',
        'area_id',
        'jefe_inmediato_id'
    ];

    //Relacion  entre entidades y entidad receptora
    public function entidad(){
        return $this->belongsTo(EntidadReceptora::class,'entidad_receptora_id');
    }
    //Relacion  entre entidades y areas
    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }
    //Relacion  entre entidades y jefes inmediatos
    public function jefeInmediatos(){
        return $this->belongsTo(JefeInmediato::class, 'jefe_inmediato_id');
    }
    //Relacion entre entidades y seguimiento
    public function seguimiento(){
        return $this->hasOne(Seguimiento::class);
    }
}
