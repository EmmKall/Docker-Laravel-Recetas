<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaRecetas;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show(CategoriaRecetas $categoriaReceta){

        $recetas = Receta::where('categoria_id', $categoriaReceta->id)->paginate(3);

        return view('categorias.show')->with('recetas', $recetas)->with('categoriaReceta', $categoriaReceta);
    }
}
