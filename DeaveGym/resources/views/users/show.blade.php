@extends('layouts.app')

@section('title', 'User Details')
<link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Dv.png') }}">
@section('log')
    
<div class="container position-absolute" >
    <div class="container" style="margin-top: 3cm;">
        <h1>User Details</h1>
    </div>
</div>
@section('content')
<Br>
<Br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $user->fn }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $user->gen }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $user->role }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection