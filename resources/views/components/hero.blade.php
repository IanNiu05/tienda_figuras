@props(['titulo', 'subtitulo'])

<div class="py-5 px-4 text-center text-white rounded mb-5 mt-4 shadow-lg position-relative overflow-hidden" style="background: linear-gradient(135deg, #212529 0%, #343a40 50%, #495057 100%); border-bottom: 4px solid #dc3545;">
    <div class="position-relative" style="z-index: 1;">
        <h1 class="mb-3 fw-bold display-4">{{ $titulo }}</h1>
        <p class="lead fw-normal text-light opacity-75">{{ $subtitulo }}</p>
    </div>
</div>