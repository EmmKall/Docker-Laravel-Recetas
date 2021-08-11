<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Events

    //Crear un registro en Perfil al crear uno en Users
    protected static function boot(){
        parent::boot();

        static::created(function ($user) {
            $user->perfil()->create();
        });
    }

    //Relaciones

    //Users to receta
    public function recetas(){
        return $this->hasMany(Receta::class);
    }

    //Users to Perfil 1:1
    public function perfil(){
        return $this->hasOne(Perfil::class);
    }


}
