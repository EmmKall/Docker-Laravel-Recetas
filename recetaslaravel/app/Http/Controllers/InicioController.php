<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){

        //Obtener ultimos registros de recetas
        /* $nuevas = Receta::orderBy('created_at', 'DESC')->get(); */
        $nuevas = Receta::latest()->take(12)->get();

        return view('inicio.index')->with('nuevas', $nuevas);
    }
}
