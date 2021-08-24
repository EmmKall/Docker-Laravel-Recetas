@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')

@endsection

@section('content')
    <h2 class="titulo-categoria text-uppercase my-3 ml-5 text-center">Últimas Recetas</h2>
    <div class="container">
        <div class="owl-carousel owl-theme p-3 my-2 d-flex justify-content-between align-items-center broder border-5 border-primary rounded rounded-3 bg-info">
            @foreach($nuevas as $receta)
                <div class="card my-2 m-1 p-1 rounded rounded-3">
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

    <div class="container border border-3 border-primary rounded rounded-3">
        <h2 class="text-center titulo-categoria text-uppercase text-primary">Más votadas</h2>
        <div class="row d-flex justify-content-between align-items-center">
            @foreach($votadas as $receta)
                @include('ui.receta')
            @endforeach
        </div>
    </div>

    @foreach($recetas as $key => $group)
        <div class="container my-3 border border-3 border-primary py-1 rounded rounded-3">
            <h2 class="titulo-categoria text-center text-uppercase h2 text-primary">{{ str_replace('-', ' ', $key) }}</h2>
            <div class="row d-flex justify-content-between align-items-center">
                @foreach($group as $recetas)
                    @if( count($recetas) > 0 )
                        @foreach($recetas as $receta)
                            @include('ui.receta')
                        @endforeach
                    @else
                        <div class="container d-flex justify-content-center align-items-center my-3">
                            <h4 class="text-center text-uppercase">Sin recetas de está categoria aún</h4>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach

@endsection

@section('plugins')

@endsection
