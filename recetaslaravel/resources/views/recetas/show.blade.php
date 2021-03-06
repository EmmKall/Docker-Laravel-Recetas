@extends('layouts.app')

@section('botones')

    @if( Auth::user() )
        <a href="{{ route('recetas.index') }}" class="btn btn-outline-primary"><i class="fas fa-chevron-circle-left"></i> Volver</a>
        <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i> Editar</a>
    @else
        <a href="#" class="btn btn-outline-primary">Recetas <i class="fas fa-book-open"></i></a>
    @endif
@endsection

@section('content')
    <div class="container receta bg-light border border-2 border-primary p-2 shadow">
        <div class="container d-flex justify-content-between my-1">
            <h2 class="text-center my-2 text-uppercase fw-bolder">{{ $receta->titulo }}</h2>
            <a class="text-primary h1" href="{{ route('categorias.show', ['categoriaReceta' => $receta->categoria->id]) }}">{{ $receta->categoria->nombre }}</a>
        </div>

        <div class="">
            <div class="d-flex justify-content-center">
                <img style="width: 80%;" class="my-2" src="../storage/{{ $receta->imagen }}" alt="">
            </div>

            <div class="row my-2">
                <div class="col-12 my-3">
                    <h4 class="text-center text-primary ingredientes">Ingredientes</h4>
                    <p class="">{!! $receta->ingredientes !!}</p>
                </div>
                <div class="col-12 my-3">
                    <h4 class="text-center text-primary preparacion">Preparación</h4>
                    <p class="">{!! $receta->preparacion !!}</p>
                </div>
            </div>

            <div class="container receta-meta d-flex justify-content-around bg-secondary text-white border border-1 p-2">
                <p class=""><span class="text-info">Autor: </span><a class="text-white" href="{{ route('perfiles.show', ['perfil' => $receta->user->id]) }}">{{ $receta->user->name }}</a></p>
                {{-- Checar error de moment, posiblemente sea por laradock --}}
                <p class=""> <span class="text-info">Fecha: </span><fecha-receta fecha="{{ $receta->created_at }}"></fecha-receta> </p>
            </div>

        </div>

        <div class="container my-2 d-flex align-items-center justify-content-center">
            <like-button receta-id="{{ $receta->id }}" like="{{ $like }}" likes="{{ $likes }}"></like-button>
        </div>

    </div>

@endsection

@section('plugins')

@endsection
