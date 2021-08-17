<?php

namespace App\Http\Controllers;

use App\Perfil;
use App\Receta;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index()
    {

    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function create()
    {

    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* public function store(Request $request)
    {

    } */

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {

        //Recetas con paginación
        $recetas = Receta::where('user_id', $perfil->user_id)->paginate(6);

        return view('perfiles.show')->with('perfil', $perfil)->with('recetas', $recetas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        $this->authorize('view', $perfil);

        return view('perfiles.edit')->with('perfil', $perfil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {

        $this->authorize('update', $perfil);

        $data = request()->validate([
            'name' => 'required',
            'url' => 'required',
            'biografia' => 'required',
        ]);

        //Actualizar user
        auth()->user()->url = $data['url'];
        auth()->user()->name = $data['name'];
        auth()->user()->save();

        //Eliminar campos de user
        unset($data['name']);
        unset($data['url']);

        if($request['imagen']){
            $ruta_img = $request['imagen']->store('upload-perfiles', 'public');

            $img = Image::make( public_path("storage/{$ruta_img}"))->fit(600, 600);
            $img->save();

            $array_img = ['imagen' =>$ruta_img];
        }

        //Axtualizar perfil
        auth()->user()->perfil()->update(
            array_merge($data, $array_img ?? [])
        );


        return redirect()->action('RecetaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(Perfil $perfil)
    {

    } */
}
