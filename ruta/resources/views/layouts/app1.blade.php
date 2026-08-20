<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Libreria Agrupa')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<header>
    <div class="header-contenido">
        <img src="{{ asset('img/logo1.jpg') }}" alt="Logo" class="logo">
        <h2>Librería Agrupa</h2>
        <button type="button"
                id="btn-tema"
                class="boton-modo">
            ☀️ Modo día
        </button>
    </div>
    <nav>
        <a href="/libros">Inicio</a>
        <a href="/libros/productos">Productos</a>
        <a href="/libros/#contacto">Contacto</a>
    </nav>
</header>
<body>
    @yield('content')
    <footer>
        <p>&copy; 2026 Librería Agrupa - Todos los derechos reservados</p>
    </footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>