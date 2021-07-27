@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-primary"><i class="fas fa-caret-left"></i> Regresar</a>
@endsection

@section('content')
    <h2 class="text-center h1">Crear Receta</h2>

    <div class="col-md-10 my-3 mx-auto">
        <form action="{{ route('recetas.store') }}" method="POST" class="row bg-light border border-3 border-primary text-center" novalidate>
            @csrf
            <div class="col-md-4 form-group">
                <label for="titulo" class="col-form-label">{{ __('Titulo Receta') }}</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ingrese un titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" />

                @error('titulo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- <div class="col-md-4 form-group">
                <label for="titulo" class="col-form-label">{{ __('Titulo Receta') }}</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ingrese un titulo" class="form-control" value="{{ old('titulo') }}" />
            </div> --}}

            <div class="col-md-12 form-group d-flex justify-content-end">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        </form>
    </div>

@endsection
