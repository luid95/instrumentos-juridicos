@extends('layouts.guest')

@section('title','Iniciar sesión')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
@endpush

@section('content')
<div class="card shadow" style="max-width:380px; width:100%;">
  <div class="card-body">
    <h1 class="h4 text-center mb-4" style="color:#800020;">INSTRUMENTOS JURÍDICOS</h1>

    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Correo</label>
        <input type="email" name="email" class="form-control" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button class="btn w-100 text-white" style="background:#800020;">Entrar</button>
      <div class="text-center mt-2">
        <a href="#">¿Olvidaste tu contraseña?</a>
      </div>
    </form>
  </div>
</div>
@endsection
