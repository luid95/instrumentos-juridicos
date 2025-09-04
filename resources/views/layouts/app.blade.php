<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Instrumentos Jurídicos')</title>

  {{-- Bootstrap + Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Estilos globales --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

  {{-- Header (solo autenticado) --}}
  @auth
  <header class="navbar navbar-dark bg-vino fixed-top shadow px-3">
    <div class="d-flex align-items-center">
      {{-- Botón móvil para abrir/cerrar el sidebar --}}
      <button class="btn btn-outline-light me-2 d-md-none" id="toggleSidebarMobile" type="button" aria-label="Abrir menú">☰</button>

      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:40px;" class="me-2">
      <span class="navbar-brand mb-0 h1">INSTRUMENTOS JURÍDICOS</span>
    </div>

    <div class="d-flex align-items-center">
      <span class="text-white me-3">
        {{ Auth::user()->name }}
        @if(optional(Auth::user()->role)->role_name)
          – {{ Auth::user()->role->role_name }}
        @endif
      </span>

      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
          <i class="bi bi-person-circle fs-4"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">Cerrar sesión</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </header>
  @endauth

  <div class="d-flex flex-grow-1 main-with-header">
    {{-- Sidebar (solo autenticado) --}}
    @auth
    <aside class="sidebar bg-vino text-white" id="sidebar">
      <div class="sidebar-header d-flex justify-content-between align-items-center p-2">
        
        {{-- Botón desktop para colapsar/expandir --}}
        <button class="btn btn-outline-light btn-sm d-none d-md-inline" id="toggleSidebarDesktop" type="button" aria-label="Colapsar menú">☰</button>
      </div>
      
      <h5 class="mb-0">Menú</h5>
      <ul class="list-unstyled mt-3 sidebar-menu">
        <li><a href="#" class="d-flex align-items-center active"><i class="bi bi-house-door"></i><span class="menu-text">Inicio</span></a></li>
        <li><a href="#" class="d-flex align-items-center"><i class="bi bi-people"></i><span class="menu-text">Usuarios</span></a></li>
        <li><a href="#" class="d-flex align-items-center"><i class="bi bi-shield-lock"></i><span class="menu-text">Roles</span></a></li>
        <li><a href="#" class="d-flex align-items-center"><i class="bi bi-gear"></i><span class="menu-text">Configuración</span></a></li>
      </ul>
    </aside>
    @endauth

    {{-- Contenido principal --}}
    <main class="flex-grow-1 p-4">
      <br><br>
      @yield('content')
    </main>
  </div>

  {{-- Footer (solo autenticado) --}}
  @auth
  <footer class="bg-vino text-white text-center py-2 mt-auto">
    &copy; {{ date('Y') }} Instrumentos Jurídicos - Todos los derechos reservados
  </footer>
  @endauth

  {{-- JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
  @stack('scripts')
</body>
</html>
