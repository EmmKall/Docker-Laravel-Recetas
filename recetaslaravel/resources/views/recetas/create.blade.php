@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" crossorigin="anonymous">
@endsection

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-primary"><i class="fas fa-caret-left"></i> Regresar</a>
@endsection

@section('content')
    <h2 class="text-center h1">Crear Receta</h2>

    <div class="col-md-11 my-3 mx-auto border rounded rounded-3">
        <form action="{{ route('recetas.store') }}" method="POST" class="row bg-primary border border-3 border-primary" novalidate enctype="multipart/form-data">
            @csrf

            <div class="col-12 col-md-4 form-group bg-primary p-1 rounded-3 text-center">
                <label for="titulo" class="col-form-label text-white">{{ __('Titulo Receta') }}</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ingrese un titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" />

                @error('titulo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 col-md-4 form-group bg-primary p-1 rounded-3 text-center">
                <label for="categoria_id" class="col-form-label text-white">{{ __('Categoria Receta') }}</label>
                <select type="text" id="categoria_id" name="categoria_id" placeholder="Ingrese un titulo" class="form-control @error('categoria_id') is-invalid @enderror">
                    <option value="">-- Seleccione una opción --</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                @error('categoria_id')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 col-md-4 form-group bg-primary p-1 rounded-3 text-center">
                <label for="imagen" class="col-form-label text-white">{{ __('Imagen') }}</label>
                <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror" value="{{ old('imagen') }}" />

                @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 col-md-6 form-group bg-primary p-1 rounded-3">
                <label for="ingredientes" class="col-form-label text-white">{{ __('Ingredientes') }}</label>
                <input type="hidden" id="ingredientes" name="ingredientes" placeholder="Ingredientes" class="form-control" value="{{ old('titulo') }}" />
                <trix-editor input="ingredientes" class="form-control bg-light @error('ingredientes') is-invalid @enderror"></trix-editor>
                @error('ingredientes')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 col-md-6 form-group bg-primary p-1 rounded-3">
                <label for="preparacion" class="col-form-label text-white">{{ __('Preparación') }}</label>
                <input type="hidden" id="preparacion" name="preparacion" placeholder="preparacion" class="form-control @error('preparacion') is-invalid @enderror" value="{{ old('preparacion') }}" />
                <trix-editor input="preparacion" class="bg-light form-control @error('preparacion') is-invalid @enderror"></trix-editor>
                @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-md-12 form-group d-flex justify-content-center">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        </form>
    </div>

@endsection

@section('plugins')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer></script>
@endsection
