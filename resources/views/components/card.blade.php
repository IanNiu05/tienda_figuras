@props(['rutaImagen', 'nombreCategoria'])

<div class="col-md-4 mb-4">
    <div class="card shadow-sm">
        <img src="{{ asset($rutaImagen) }}" class="card-img-top" alt="Figura" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $nombreCategoria }}</h5>
        </div>
    </div>
</div>  