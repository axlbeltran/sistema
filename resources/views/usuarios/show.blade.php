@extends('layouts.app')

@section('content')

<h1>Detalle Usuario</h1>

<p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
<p><strong>Email:</strong> {{ $usuario->email }}</p>

<a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>

@endsection