
@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create') }}" class="btn btn-primary">Crear Receta  <i class="far fa-plus-square"></i></a>
    <a href="{{ route('perfiles.show', ['perfil' => auth()->user()->id ]) }}" class="btn btn-outline-info mx-3"><i class="far fa-user"></i>Ver Perfil</a>
    <a href="{{ route('perfiles.edit', ['perfil' => auth()->user()->id ]) }}" class="btn btn-outline-secondary"><i class="far fa-edit"></i> Editar Perfil</a>
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
    </div>

</div>


@endsection

