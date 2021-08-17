@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" crossorigin="anonymous">
@endsection

@section('botones')
    <a href="{{ route('perfiles.show', ['perfil' => $perfil->id]) }}" class="btn btn-primary text-uppercase"><i class="fas fa-caret-left"></i> Regresar</a>
@endsection

@section('content')
    <div class="container bg-info my-2 p-2 border border-3 border-primary rounded rounded-3">

        <div class="container bg-light p-2 border border-primary border-3 rounded rounded-3">
            <h2 class="h1 text-center">Editar mi perfil:</h2>
            <form action="{{ route('perfiles.update', ['perfil' => $perfil->id]) }}" method="POST" class="row p-2" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-12 col-md-3 form-group">
                    <label for="name" class="col-form-label">{{ __('Nombre') }}</label>
                    <input type="text" name="name" id="name" placeholder="Ingresa nombre" class="form-control @error('name')  is-invalid @enderror" value="{{ $perfil->usuario->name }}">
                </div>
                @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="col-12 col-md-3 form-group">
                    <label for="url" class="col-form-label">{{ __('Sitio Web') }}</label>
                    <input type="url" name="url" id="url" placeholder="Tu sitio Web" class="form-control @error('url')  is-invalid @enderror" value="{{ $perfil->usuario->url }}">
                </div>
                @error('url')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="col-12 col-md-3 form-group">
                    <label for="imagen" class="col-form-label">{{ __('Tu imagen') }}</label>
                    <input type="file" name="imagen" id="imagen" class="form-control @error('imagen')  is-invalid @enderror" value="{{ $perfil->usuario->imagen }}">
                </div>
                @error('imagen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="col-12 col-md-3">
                    @if( $perfil->imagen )
                    <img style="width: 150px;" src="../../storage/{{ $perfil->imagen }}" alt="" class="text-center border border-5 border-primary rounded rounded-circle p-2">
                    @endif
                </div>

                <div class="col-12 col-md-10 m-auto form-group">
                    <label for="biografia" class="col-form-label">{{ __('Biografia') }}</label>
                    <input type="hidden" name="biografia" id="biografia" placeholder="Tu biografia" value="{{ $perfil->biografia }}" class="form-control @error('biografia')  is-invalid @enderror">
                    <trix-editor input="biografia" class="form-group @error('biografia') is-invalid @enderror" value="{{ $perfil->biografia }}"></trix-editor>
                </div>
                @error('biografia')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="col-12 d-flex justify-content-center align-items-center my-2">
                    <input type="submit" value="Actualizar ✓" class="btn btn-success">
                </div>

            </form>

        </div>

    </div>
@endsection

@section('plugins')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer></script>
@endsection
