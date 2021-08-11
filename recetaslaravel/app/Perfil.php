<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

    protected $fillable = [
        'biografia', 'imagen'
    ];

    //Relaciones
    //Perfil to users 1:1
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
