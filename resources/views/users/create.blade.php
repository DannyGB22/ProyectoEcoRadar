@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Usuario</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-success">Crear</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
