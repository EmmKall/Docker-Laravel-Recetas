<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', 'InicioController@index' )->name('inicio.index');

Route::get('/recetas', 'RecetaController@index')->name('recetas.index');
Route::get('/recetas/create', 'RecetaController@create')->name('recetas.create');
Route::post('/recetas', 'RecetaController@store')->name('recetas.store');
Route::get('/recetas/{receta}', 'RecetaController@show')->name('recetas.show');
Route::get('/recetas/{receta}/edit', 'RecetaController@edit')->name('recetas.edit');
Route::put('/recetas/{receta}', 'RecetaController@update')->name('recetas.update');
Route::delete('/recetas/{receta}', 'RecetaController@destroy')->name('recetas.destroy');

//Buscador de receas
Route::get('/buscar', 'RecetaController@search')->name('receta.search');

//Forma rápida de declarar las rutas
/* Route::resource('recetas', 'RecetaController'); */

Route::get('/perfiles/{perfil}', 'PerfilController@show')->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', 'PerfilController@edit')->name('perfiles.edit');
Route::put('perfiles/{perfil}', 'PerfilController@update')->name('perfiles.update');

Route::post('/recetas/{receta}', 'LikesController@update')->name('likes.update');

Route::get('/categoria/{categoriaReceta}', 'CategoriasController@show')->name('categorias.show');

Auth::routes();


/* Route::get('/home', 'HomeController@index')->name('home'); */
