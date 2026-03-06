@extends('layouts.layout_funkos')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-5 fw-bold text-uppercase">Catálogo de Funkos</h2>

    <div class="row">
        @foreach($imagenes as $img)
            <x-card 
                rutaImagen="img/funkos/{{ $img }}" 
                nombreCategoria="Funko Exclusivo" 
                color="dark"
            />
        @endforeach
    </div>
</div>
@endsection