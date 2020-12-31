<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function adminlte_image(){
        return 'https://picsum.photos/300/300';
    }
    public function adminlte_profile_url(){
        return 'perfil';
    }

    //Evento que se ejecuta cuando un usuario es creado
    protected static function boot()
    {
        parent::boot();

        //Crear estudiante o admin, una vez que se cree el usuario
        static::created(function ($user)
        {
            if($user->attributes['tipo']=='admin'){
                $user->administrador()->create();
            }else if($user->attributes['tipo']=='user'){
                $user->estudiante()->create();
                $user->estudiante->seguimiento()->create();
                
            }
        });
    }

    //Relacion  1:1 entre usuario y administrador
    public function administrador(){
        return $this->hasOne(Administrador::class);
    }
    public function estudiante(){
        return $this->hasOne(Estudiante::class);
    }
}
