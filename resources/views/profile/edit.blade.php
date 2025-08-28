@extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')
<h2>Editar Perfil</h2>

@if(session('status'))
    <div class="alert success">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Nueva Contraseña (opcional)</label>
        <input id="password" type="password" name="password" placeholder="Dejar en blanco para no cambiar">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input id="password_confirmation" type="password" name="password_confirmation">
    </div>

    <button type="submit" class="btn">Actualizar Perfil</button>
</form>
@endsection
