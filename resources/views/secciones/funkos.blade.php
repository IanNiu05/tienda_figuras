@extends('layouts.layout_funkos')

@section('content')
<h2 class="text-center mb-4 mt-4">Catálogo de Funkos</h2>

<div class="row">
    @foreach($imagenes as $img)
        
        <x-card :ruta-imagen="'img/funkos/' . $img" nombre-categoria="Funko Exclusivo" />
    
    @endforeach
</div>
@endsection