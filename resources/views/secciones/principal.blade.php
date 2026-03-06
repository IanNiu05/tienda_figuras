@extends('layouts.app')

@section('content')

<x-hero 
    titulo="Bienvenido a la Tienda de Coleccionables" 
    subtitulo="Encuentra las mejores figuras, autos coleccionables y sets de construcción." 
/>


<x-novedad 
    etiqueta="¡NUEVO INGRESO!"
    titulo="Colección LEGO Star Wars"
    texto="Ya llegaron los nuevos sets de la saga. Unidades limitadas disponibles en tienda."
    imagen="img/lego/lg2.jpg"
/>

<h2 class="text-center fw-bold mt-5 mb-4">Nuestras Categorías</h2>

<div class="row text-center">

    
    <x-card 
        nombreCategoria="Funkos" 
        rutaImagen="img/funkos/fu1.jpg" 
        color="dark" 
        ruta="funkos" 
    />

    <x-card 
        nombreCategoria="Hotwheels" 
        rutaImagen="img/hotwheels/hw1.jpg" 
        color="danger" 
        ruta="hotwheels" 
    />

    <x-card 
        nombreCategoria="LEGO" 
        rutaImagen="img/lego/lg1.jpg" 
        color="warning" 
        ruta="lego" 
    />
</div>

@endsection