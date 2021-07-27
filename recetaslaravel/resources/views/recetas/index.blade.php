
@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create') }}" class="btn btn-primary">Crear Receta  <i class="far fa-plus-square"></i></a>
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
                <tr >
                    <td scope="col">Pizza</td>
                    <td scope="col">imagen.jpg</td>
                    <td scope="col">Italiana</td>
                    <td scope="col d-flex justify-content-center">
                        <a href="#" class="btn btn-info text-white">Editar <i class="far fa-edit"></i></a>
                        <a href="#" class="btn btn-danger">Eliminar <i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
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

