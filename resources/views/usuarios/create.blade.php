@extends('layouts.app')

@section('content')

<h1>Nuevo Usuario</h1>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

    <button class="btn btn-success">Guardar</button>
</form>

@endsection