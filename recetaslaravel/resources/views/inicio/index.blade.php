@extends('layouts.app')

@section('styles')

@endsection

@section('botones')

@endsection

@section('content')
    <h2 class="titulo-categoria text-uppercase my-3 ml-5 text-center">Últimas Recetas</h2>
    <div class="container">
        <div class="row p-1 d-flex justify-content-between align-items-center broder border-5 border-primary rounded rounded-3">
            @foreach($nuevas as $receta)
                <div class="card col-5 col-md-3 my-2 mx-1 p-0 border border-primary border-3 rounded rounded-3">
                    <img class="card-img-top" src="/storage/{{ $receta->imagen }}" alt="Receta">
                    <div class="card-body">
                        <h3 class="text-center h2 card-tittle">{{ $receta->titulo }}</h3>
                        <h4 class="text-center">{{ $receta->categoria->nombre }}</h4>
                        <p>{{ Str::words( strip_tags($receta->preparacion), 15 ) }}</p>
                        <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-primary text-uppercase"><i class="fas fa-eye"></i> Ver receta</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('plugins')

@endsection
