<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos Jurídicos - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Instrumentos Jurídicos</h1>
            <nav class="nav">
                <a href="{{ url('/') }}">Inicio</a>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <a href="{{ route('profile.edit') }}">Perfil</a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit">Cerrar sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Registro</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Instrumentos Jurídicos</p>
    </footer>
</body>
</html>
