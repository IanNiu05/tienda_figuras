@props(['ruta', 'color' => 'primary'])

<a href="{{ $ruta }}" class="btn btn-{{ $color }} w-100 py-2 fw-bold shadow-sm">
    {{ $slot }}
</a>