@extends('layouts.app')

@section('title', 'Create User')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-secondary">
                    <div class="card-header bg-secondary">
                        <h4 class="card-title">Create User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}" class="bg-secondary">
                            @csrf
                            <div class="form-group ">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fn">Fecha Nacimiento</label>
                                <input type="date" class="form-control @error('fn') is-invalid @enderror" id="fn" name="fn" value="{{ old('fn') }}" required>
                                @error('fn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gen">Genero</label>
                                <select class="form-control @error('gen') is-invalid @enderror" id="gen" name="gen" required>
                                    <option value="">Seleccionar Genero</option>
                                    <option value="Male" @if (old('gen') == 'Male') selected @endif>Masculino</option>
                                    <option value="Female" @if (old('gen') == 'Female') selected @endif>Femenino</option>
                                </select>
                                @error('gen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role">Role de usuario</label>
                                <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                    <option value="">Seleccionar Role de usuario</option>
                                    <option value="Admin" @if (old('role') == 'Admin') selected @endif>Admin</option>
                                    <option value="User" @if (old('role') == 'User') selected @endif>User</option>
                                    <option value="Coach" @if (old('role') == 'Coach') selected @endif>Coach</option>
                                </select>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p></p>
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection