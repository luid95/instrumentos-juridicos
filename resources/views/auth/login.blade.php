@extends('layouts.guest')

@section('title', 'Iniciar sesión')

@section('content')
<div class="login-card">
  <h1 class="h4 login-title mb-4">Instrumentos Jurídicos</h1>

  {{-- Errores --}}
  @if ($errors->any())
    <div class="alert alert-danger py-2">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Formulario login --}}
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Correo electrónico</label>
      <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button class="btn btn-vino w-100">Entrar</button>
  </form>

  <div class="d-flex justify-content-between mt-3">
    <a href="#">Recuperar contraseña</a>
  </div>
</div>
@endsection
