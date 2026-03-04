@extends('layouts.layout_hotwheels')

@section('content')
<h2 class="text-center mb-4 mt-4">Catálogo de Hotwheels</h2>

<div class="row">
    @foreach($imagenes as $img)
        <x-card :ruta-imagen="'img/hotwheels/' . $img" nombre-categoria="Auto Hotwheels" />
    @endforeach
</div>
@endsection