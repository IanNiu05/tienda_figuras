@extends('layouts.layout_lego')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-5 fw-bold text-uppercase">Catálogo de LEGO</h2>

    <div class="row">
        @foreach($imagenes as $img)
            <x-card 
                rutaImagen="img/lego/{{ $img }}" 
                nombreCategoria="Set de LEGO" 
                color="warning"
            />
        @endforeach
    </div>
</div>
@endsection