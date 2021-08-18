<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    protected $fillable = [ 'titulo', 'ingredientes', 'preparacion', 'imagen', 'categoria_id' ];

    //Receta to Categoria 1:1
    public function categoria(){
        return $this->belongsTo(CategoriaRecetas::class);
    }

    //Receta to User 1:1
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //Receta to Users n:m
    public function likes(){
        return $this->belongsToMany(User::class, 'likes_receta');
    }

}
