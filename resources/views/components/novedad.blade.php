@props(['titulo', 'texto', 'imagen', 'etiqueta'])

<div class="container my-5">
    <div class="row align-items-center bg-white shadow-sm rounded-4 overflow-hidden border">
        
        <div class="col-md-6 p-0" style="height: 350px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset($imagen) }}" 
                 alt="{{ $titulo }}" 
                 class="img-fluid" 
                 style="max-height: 100%; max-width: 100%; object-fit: contain; padding: 25px;">
        </div>

        <div class="col-md-6 p-5 text-center text-md-start">
            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill fw-bold">{{ $etiqueta }}</span>
            <h2 class="fw-bold display-6 mb-3">{{ $titulo }}</h2>
            <p class="text-secondary mb-0 fs-5" style="line-height: 1.6;">{{ $texto }}</p>
        </div>

    </div>
</div>