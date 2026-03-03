<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleccionables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('funkos') }}">Tienda de Coleccionables</a>
            <div>
                <a class="text-white me-3 text-decoration-none" href="{{ route('funkos') }}">Funkos</a>
                <a class="text-white me-3 text-decoration-none" href="{{ route('hotwheels') }}">Hotwheels</a>
                <a class="text-white text-decoration-none" href="{{ route('lego') }}">LEGO</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content') 
    </div>

</body>
</html>