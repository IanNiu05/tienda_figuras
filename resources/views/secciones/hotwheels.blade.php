@extends('layouts.layout_hotwheels')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-5 fw-bold text-uppercase">Catálogo de Hotwheels</h2>

    <div class="row">
        @foreach($imagenes as $img)
            <x-card 
                rutaImagen="img/hotwheels/{{ $img }}" 
                nombreCategoria="Auto a Escala" 
                color="danger"
            />
        @endforeach
    </div>
</div>
@endsection