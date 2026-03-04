@extends('layouts.layout_lego')

@section('content')
<h2 class="text-center mb-4 mt-4">Catálogo de LEGO</h2>

<div class="row">
    @foreach($imagenes as $img)
        <x-card :ruta-imagen="'img/lego/' . $img" nombre-categoria="Set de LEGO" />
    @endforeach
</div>
@endsection