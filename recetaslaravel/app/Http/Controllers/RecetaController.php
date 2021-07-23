<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    function index(){
        $recetas = [
            'Pizza',
            'Hamburguesa',
            'Hotdogs'
        ];
        return view('recetas.index')->with('recetas', $recetas);
    }
}
