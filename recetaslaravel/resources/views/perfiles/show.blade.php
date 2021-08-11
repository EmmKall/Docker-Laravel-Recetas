@extends('layouts.app')

@section('botones')
    {{-- <a href="{{ route('recetas.index') }}" class="btn btn-outline-primary"><i class="fas fa-chevron-circle-left"></i> Volver</a>
    <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i> Editar</a> --}}
@endsection


@section('content')
    <div class="container bg-light p-2 text-center boder boder-2 boder-primary">

        <div class="row text-center d-flex justify-content-center align-items-center m-2 p-1">
            <div class="col-12 col-md-5 text-center">
                @if($perfil->imagen)
                    <img src="../storage/{{ $perfil->imagen }}" alt="" class="text-center">
                @endif
            </div>
            <div class="col-12 col-md-7">

                <h2 class="h1 text-center">Perfil: {{ $perfil->usuario->name }}</h2>

                @if($perfil->usuario->url)
                    <p class="text-right my-2 fs-4"><a href="{{ $perfil->usuario->url }}" class="text-primary fw-bolder">Visitar sitio web</a></p>
                @endif

                <div class="biografia my-2">
                    <h4 class="text-center">Biografia</h4>
                    {!! $perfil->biografia !!}
                </div>

                <p class="text-left my-2">Se unio el: <span class="text-center"></span></p>
            </div>
            {{ $perfil }}
        </div>
    </div>

@endsection

@section('plugins')

@endsection
