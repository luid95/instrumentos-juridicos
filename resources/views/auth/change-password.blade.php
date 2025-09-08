@extends('layouts.app')

@section('title', 'Cambiar contraseña')

@section('content')
<div class="container">
    <h2 class="mb-4">Cambiar contraseña</h2>

    {{-- Mostrar mensajes de éxito --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    {{-- Mostrar errores --}}
    @if ($errors->updatePassword->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->updatePassword->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="password" class="form-label">Nueva contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar nueva contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-vino">Actualizar contraseña</button>
    </form>
</div>
@endsection
