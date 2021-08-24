@extends('layouts.app')

@section('styles')

@endsection

@section('botones')

@endsection

@section('content')
    <div class="container">
        <h2 class="titulo-categoria text-uppercase my-3">Resutldados Busquedad: {{ $busqueda }}</h2>
        <div class="row">
            @foreach($recetas as $receta)
                @include('ui.receta')
            @endforeach
        </div>
        {{ $recetas->links() }}
    </div>
@endsection

@section('plugins')

@endsection
