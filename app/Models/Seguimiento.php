<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'SEG_status',
        'estudiante_id',
        'entidad_id',
        'fecha_id'
    ];

    //Evento que se ejecuta cuando un usuario es creado
    protected static function boot()
    {
        parent::boot();

        //Crear estudiante o admin, una vez que se cree el usuario
        static::created(function ($seguimiento) {
            $seguimiento->estado()->create();
        });
    }

    //Relacion entre seguimiento y estudiantes
    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }
    //Relacion entre seguimiento y ebtidades
    public function entidades()
    {
        return $this->belongsTo(Entidad::class, 'entidad_id');
    }
    //Relacion entre seguimiento y fechas
    public function fechas()
    {
        return $this->belongsTo(Fecha::class, 'fecha_id');
    }

    public function estado()
    {
        return $this->hasOne(Estado::class);
    }
}
