@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Bienvenido, {{ Auth::user()->name }}</h2>
<p>Selecciona un módulo para comenzar.</p>

<div class="modules">
    @if(Auth::user()->hasRole('Administrador'))
        <a href="#">Módulo Administrador</a>
        <a href="#">Módulo Subrogados</a>
        <a href="#">Módulo Recursos Materiales</a>
        <a href="#">Módulo Servicios Generales</a>
    @elseif(Auth::user()->hasRole('Subrogado'))
        <a href="#">Módulo Subrogados</a>
    @elseif(Auth::user()->hasRole('Recursos Materiales'))
        <a href="#">Módulo Recursos Materiales</a>
    @elseif(Auth::user()->hasRole('Servicios Generales'))
        <a href="#">Módulo Servicios Generales</a>
    @endif
</div>
@endsection
