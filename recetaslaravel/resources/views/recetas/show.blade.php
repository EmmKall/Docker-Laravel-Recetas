@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-outline-primary"><i class="fas fa-chevron-circle-left"></i> Volver</a>
    <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i> Editar</a>
@endsection

@section('content')
    <div class="container receta bg-light border border-2 border-primary p-2">
        <div class="container d-flex justify-content-between my-1">
            <h2 class="text-center my-2 text-uppercase fw-bolder">{{ $receta->titulo }}</h2>
            <h4 class="text-center text-primary">{{ $receta->categoria->nombre }}</h4>
        </div>

        <div class="">
            <img class="my-2" src="../storage/{{ $receta->imagen }}" alt="">

            <div class="row my-2">
                <div class="col-12 col-md-5">
                    <h4 class="text-center text-primary ingredientes">Ingredientes</h4>
                    <p class="">{!! $receta->ingredientes !!}</p>
                </div>
                <div class="col-12 col-md-7">
                    <h4 class="text-center text-primary preparacion">Preparación</h4>
                    <p class="">{!! $receta->preparacion !!}</p>
                </div>
            </div>

            <div class="container receta-meta d-flex justify-content-around bg-secondary text-white border border-1 p-2">
                <p class=""><span class="text-info">Autor: </span>{{ $receta->user->name }}</p>
                {{-- Checar error de moment, posiblemente sea por laradock --}}
                <p class=""> <span class="text-info">Fecha: </span><fecha-receta fecha="{{ $receta->created_at }}"></fecha-receta> </p>
            </div>

        </div>
    </div>

@endsection

@section('plugins')

@endsection
