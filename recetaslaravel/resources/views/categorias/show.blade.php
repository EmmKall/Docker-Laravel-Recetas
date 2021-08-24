@extends('layouts.app');

@section('styles')

@endsection

@section('botones')
    <a href="{{ route('inicio.index') }}" class="btn btn-outline-primary my-3 text-uppercase">Inicio</a>
@endsection

@section('content')
    <div class="container bg-light p-2 border border-primary border-3 rounded rounded-3">
        <h2 class="titulo-categoria text-uppercase text-center h1 text-primary">Recetas Categoria:</h2>
        <h4 class="text-center titulo-categoria text-uppercase h3 text-primary">{{ $categoriaReceta->nombre }}</h4>
        <div class="row d-flex justify-content-between align-items-center p-1">
            @foreach($recetas as $receta)
                @include('ui.receta')
            @endforeach
        </div>
        <div class="d-flex justify-content-center algin-items-center m-2">
            {{ $recetas->links() }}
        </div>
    </div>
@endsection

@section('plugins')

@endsection
