@extends('layouts.app')

@section('content')

<h1>Editar Usuario</h1>

<form action="{{ route('usuarios.update', $usuario) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control mb-2">
    <input type="email" name="email" value="{{ $usuario->email }}" class="form-control mb-2">

    <button class="btn btn-warning">Actualizar</button>
</form>

@endsection