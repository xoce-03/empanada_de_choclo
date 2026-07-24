<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Automotriz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    @auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('servicios.index') }}">Taller Automotriz</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servicios.index') }}">Servicios</a>
                    </li>
                </ul>
                <div class="d-flex text-white align-items-center">
                    <span class="me-3">Hola, {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-light btn-sm" type="submit">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @endauth

    <main class="container">
        @yield('content')
    </main>

    <footer class="text-center text-muted py-4 mt-5">
        <small>&copy; {{ date('Y') }} Taller Automotriz - Todos los derechos reservados</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
