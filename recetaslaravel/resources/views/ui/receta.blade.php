<div class="card shadow col-6 col-md-3 m-2 p-2 bg-light">
    <img class="card-img-top rounded rounded-3" src="/storage/{{ $receta->imagen }}" alt="">
    <div class="card-body">
        <h3 class="text-center">{{ $receta->titulo }}</h3>
        <p>{{ Str::words( strip_tags( $receta->preparacion ), 12 ) }}</p>
        <div class="container receta-meta d-flex justify-content-between px-2">
            <p class="text-primary"><span class="">Autor: </span>{{ $receta->user->name }}</p>
            {{-- Checar error de moment, posiblemente sea por laradock --}}
            <p class="text-info"> <span class="">Fecha: </span><fecha-receta fecha="{{ $receta->created_at }}"></fecha-receta> </p>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            @if( count( $receta->likes ) > 0 )
                <p class=""><i class="text-danger fas fa-heart"></i> <span class="fw-bold">{{ count( $receta->likes ) }}</span> Le(s) gustó</p>
            @else
                <p class="">Aun no han vista esta receta</p>
            @endif
        </div>
        <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-primary text-uppercase"><i class="far fa-eye"></i> Ver Receta</a>
    </div>
</div>
