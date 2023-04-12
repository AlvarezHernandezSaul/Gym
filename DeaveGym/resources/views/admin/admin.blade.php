@extends('layouts.app')

@section('title', 'Admin')
<link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Dv.png') }}">
@section('log')


<div class="container position-absolute" >
    <div class="container" style="margin-top: 3cm;">
        <h1>Vista Admin</h1>
    </div>
</div>
@section('content')
<Br>
<Br>
<div class="container mt-4">
    <h2>Lista de Usuarios</h2>
   
    <table class="table" style="background-color: #f2f2f2;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('users.create') }}" class="btn btn-success">Agregar Usuario</a>
</div>
@endsection