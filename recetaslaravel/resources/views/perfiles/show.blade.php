@extends('layouts.app')

@section('botones')
    @if( Auth::user() )
        <a href="{{ route('perfiles.edit', ['perfil' => $perfil->id]) }}" class="btn btn-outline-secondary text-uppercase mx-2">Editar <i class="fas fa-pencil-alt"></i></a>
        <a href="{{ route('recetas.index') }}" class="btn btn-outline-info text-uppercase mx-2">Mis Recetas <i class="fas fa-book-open"></i></a>
    @else
        <a href="#" class="btn btn-outline-info text-uppercase">Recetas <i class="fas fa-book-open"></i></a>
    @endif


@endsection


@section('content')
    <div class="container my-3 bg-info p-1 text-center border rounded rounded-3 border-primary border-5">

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

    <div class="container my-3 bg-info text-center border border-primary rounded border-5">
        <h3 class="h1 text-white">Recetas de {{ $perfil->usuario->name }} </h3>
        <div class="row bg-light">
            @if( count($recetas) > 0)
                @foreach($recetas as $receta)

                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <img src="/storage/{{ $receta->imagen }}" class="card-img-top" alt="Receta">
                        <div class="card-body">
                          <h5 class="card-title text-bold">{{ $receta->titulo }}</h5>
                          <p class="card-text">{{ $receta->categoria->nombre }}</p>
                          <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-primary text-uppercase">Ver receta</a>
                        </div>
                    </div>
                </div>

                @endforeach
            @else
                <h3 class="h1">Aun no tiene recetas</h3>
            @endif

            <div class="col-12 my-3 d-flex justify-content-center align-items-center">
                {{ $recetas->links() }}
            </div>

        </div>
    </div>

@endsection

@section('plugins')

@endsection
