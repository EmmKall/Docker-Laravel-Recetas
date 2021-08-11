@extends('layouts.app')

@section('botones')
    <a href="{{ route('perfiles.edit', ['perfil' => $perfil->id]) }}" class="btn btn-outline-secondary">Editar <i class="fas fa-pencil-alt"></i></a>
@endsection


@section('content')
    <div class="container bg-info p-1 text-center border rounded rounded-3 border-primary border-5">

        <div class="row bg-light text-center d-flex justify-content-center align-items-center m-2 p-3 border border-5 border-primary rounded rounded-3">
            <div class="col-12 col-md-5 text-center my-3">
                @if($perfil->imagen)
                    <img style="width: 80%;" src="../storage/{{ $perfil->imagen }}" alt="" class="text-center border border-5 border-primary rounded rounded-circle p-2">
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
            </div>
        </div>
    </div>

@endsection

@section('plugins')

@endsection
