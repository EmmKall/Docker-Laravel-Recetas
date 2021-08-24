<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaRecetas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){

        //Obtener ultimos registros de recetas
        /* $nuevas = Receta::orderBy('created_at', 'DESC')->get(); */
        $nuevas = Receta::latest()->take(12)->get();

        //Obtener todas las categorias
        $categorias = CategoriaRecetas::all();

        //Obtener recetas por categoria
        $recetas = [];

        foreach ($categorias as $categoria){
            $recetas[ Str::slug($categoria->nombre) ][  ] = Receta::where('categoria_id', $categoria->id )->take(3)->get();
        }

        //Más votadas
        /* $votadas = Receta::has('likes', '>', 1)->get(); */
        $votadas = Receta::withCount('likes')->orderBy('likes_count', 'desc')->take(3)->get();

        return view('inicio.index')->with('nuevas', $nuevas)->with('recetas', $recetas)->with('votadas', $votadas);
    }
}
