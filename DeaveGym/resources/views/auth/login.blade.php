@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Dv.png') }}">
@section('title', 'Login')

@section('content')




<div class="container col-md-5 border border-4 rounded-3" style="background-color: #07ca07;">
  
<form class="row g-1"  method="POST" action="">
  <h1 class="display-6 fw-bold text-center">Log in</h1>
  <a></a>
  <a></a>
  <a></a>
    @csrf

    <div class="col-md-8 offset-md-2" > 
      <label for="Email" class="form-label">Email </label>
      <input type="email" class="form-control" placeholder="ingrese su correo electronico" id="email" name="email">
    </div>
    <a></a>
    <a></a>
    <a></a>
    <div class="col-md-8 offset-md-2">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="contraseña de 8 digitos">
    </div>
 @error('message')
    <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, correo y/o contraseña incorrectos</p>
   @enderror 
   <a></a>
    <button class="btn btn-light col-md-6 my-3 offset-md-3 text-success" type="submit" ¿>Entrar</button>
 
    
</div>
</form> 
@endsection