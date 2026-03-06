@props(['rutaImagen', 'nombreCategoria', 'color' => 'dark', 'ruta' => null])

<div class="col-md-4 mb-4 d-flex align-items-stretch"> 
    <div class="card shadow-sm border-0 w-100 rounded-4 overflow-hidden card-animated">
        
        <div style="height: 250px; background-color: #ffffff; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #f0f0f0;">
            <img src="{{ asset($rutaImagen) }}" 
                 class="img-fluid p-3" 
                 alt="{{ $nombreCategoria }}" 
                 style="max-height: 100%; max-width: 100%; object-fit: contain;"
                 onerror="this.src='https://placehold.co/400x400?text=Proximamente'"> 
        </div>

        <div class="card-body text-center bg-white d-flex flex-column p-4">
            <h4 class="fw-bold mb-3 text-dark">{{ $nombreCategoria }}</h4>
            <p class="text-muted small mb-4">Explora los mejores productos de la línea {{ $nombreCategoria }}.</p>
            
            <div class="mt-auto">
                @if($ruta)
                    <x-button-link :ruta="route($ruta)" color="{{ $color }}">
                        Ir a {{ $nombreCategoria }}
                    </x-button-link>
                @else
                    <button class="btn btn-secondary w-100 py-2 fw-bold shadow-sm" disabled>
                        Detalles
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    .card-animated {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-animated:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
</style>