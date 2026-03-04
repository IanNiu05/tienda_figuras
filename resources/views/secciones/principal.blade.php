@extends('layouts.app')

@section('content')

<x-hero 
    titulo="Bienvenido a la Tienda de Coleccionables" 
    subtitulo="Encuentra las mejores figuras, autos colecionables y sets de construcción." 
/>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card shadow border-0 p-4 h-100 bg-light">
            <h3 class="mb-3">Funkos</h3>
            <p class="text-muted mb-4">Descubre nuestra colección exclusiva de funkos.</p>
            <div class="mt-auto">
                <x-button-link :ruta="route('funkos')" color="dark">
                    Ir a Funkos
                </x-button-link>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow border-0 p-4 h-100 bg-light">
            <h3 class="mb-3">Hotwheels</h3>
            <p class="text-muted mb-4">Los mejores autos Hotwheels para tu colección.</p>
            <div class="mt-auto">
                <x-button-link :ruta="route('hotwheels')" color="danger">
                    Ir a Hotwheels
                </x-button-link>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow border-0 p-4 h-100 bg-light">
            <h3 class="mb-3">LEGO</h3>
            <p class="text-muted mb-4">Arma tus mundos favoritos bloque por bloque.</p>
            <div class="mt-auto">
                <x-button-link :ruta="route('lego')" color="warning">
                    Ir a LEGO
                </x-button-link>
            </div>
        </div>
    </div>
</div>

@endsection