<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaRecetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class RecetaController extends Controller
{
    public function __construct(){

        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $recetas = Receta::all(); */

        $recetas = Auth::user()->recetas;

        return view ('recetas.index')->with('recetas', $recetas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $categorias = DB::table('categoria_recetas')->get()->pluck('id', 'nombre'); */ /* Sin modelo */
        $categorias = CategoriaRecetas::all(['id', 'nombre']); /* Con modelo */
        return view('recetas.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ruta_img = $request['imagen']->store('upload_recetas', 'public');

        $img = Image::make( public_path("storage/{$ruta_img}"))->fit(1000, 550);
        $img->save();

        $data = request()->validate([
            'titulo' => 'required|min:6',
            'ingredientes' => 'required',
            'preparacion' => 'required',
            'imagen' => 'required|image',
            'categoria_id'=> 'required',
        ]);

        //Sin modelo
        /* DB::table('recetas')->insert([
            'titulo' => $data['titulo'],
            'ingredientes' => $data['ingredientes'],
            'preparacion' => $data['preparacion'],
            'imagen' => $ruta_img,
            'categoria_id' => $data['categoria_id'],
            'user_id' => Auth::user()->id,
        ]); */

        //Con modelo
        auth()->user()->recetas()->create([
            'titulo' => $data['titulo'],
            'ingredientes' => $data['ingredientes'],
            'preparacion' => $data['preparacion'],
            'imagen' => $ruta_img,
            'categoria_id' => $data['categoria_id'],
        ]);

        return redirect()->action('RecetaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        return view('recetas.show')->with('receta', $receta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        return 'Desde editar' . $receta;
        return view('recetas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
