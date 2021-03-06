
@extends('layouts.app')

@section('botones')
    @if( Auth::user() )
        <a href="{{ route('recetas.create') }}" class="btn btn-primary text-uppercase">Crear Receta  <i class="far fa-plus-square"></i></a>
    @endif
    <a href="{{ route('perfiles.show', ['perfil' => auth()->user()->id ]) }}" class="btn btn-outline-info mx-3 text-uppercase"><i class="far fa-user"></i>Ver Perfil</a>
    @if( auth()->user()->id )
        <a href="{{ route('perfiles.edit', ['perfil' => auth()->user()->id ]) }}" class="btn btn-outline-secondary text-uppercase"><i class="far fa-edit"></i> Editar Perfil</a>
    @endif
@endsection

@section('content')

<h2 class="text-center h1">Recetas</h2>
<div class="row d-flex flex-direction-row justify-content-center">

    <div class="col-sm-10 mx-auto p-2">
        <table class="table">
            <thead class="bg-primary text-center text-light">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach($recetas as $receta)
                <tr class="border-bottom fw-bold">
                    <td scope="col">{{ $receta->titulo }}</td>
                    <td scope="col"><img style="width: 200px;" src="../storage/{{ $receta->imagen }}" alt=""></td>
                    <td scope="col" class="form-img">{{ $receta->categoria->nombre }}</td>
                    <td scope="col d-flex justify-content-center align-items-center">
                        <a href="{{ route('recetas.show', ['receta' => $receta->id] ) }}" class="btn btn-secondary d-block"><i class="fas fa-eye"></i> Ver</a>
                        <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-info text-white my-3 d-block">Editar <i class="far fa-edit"></i></a>
                        <eliminar-receta id="{{ $receta->id }}"></eliminar-receta>
                    </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot class="bg-primary text-center text-light">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </tfoot>
        </table>

        <div class="col-12 my-3 d-flex justify-content-center align-items-center">
            {{ $recetas->links() }}
        </div>
    </div>
</div>

<h2 class="h1 text-center my-3">Recetas que te gustan</h2>
    <div class="container row m-auto bg-info border border-primary rounded rounded-3">
        <div class="col-12 my-2 bg-light border border-3 border-primary p-3">
            @if( count($meGusta) > 0 )
                <ul class="list-group">
                    @foreach($meGusta as $receta)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <p>{{ $receta->titulo }}</p>
                            <a class="btn btn-outline-primary text-uppercase" href="{{ route('recetas.show', ['receta' => $receta->id]) }}"><i class="fas fa-eye"></i> Ver</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <h3 class="h3">Aun no tienes recetas guardadas</h3>
                    <small>Dale me gusta a las recetas, para guardarlas</small>
                </div>
            @endif
        </div>
    </div>


@endsection

