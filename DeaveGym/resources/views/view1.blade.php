@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Dv.png') }}">
@section('title', 'DeaveGym')

@section('content')


<div class="container position-absolute top-50 start-25 translate-middle-y" style="margin-top: 10cm;">
    <div class="container">
<img src="{{ asset('img/brand/portada.jpg') }}" width="1300" height="600" class="rounded float-start" alt="..." >
<div >
  <div></div>
<video autoplay muted width="1300" height="600" id="videoPlayer" loop >
  <source src="{{ asset('img/brand/Bienvenida1.mp4') }}" type="video/mp4">
</video>
</div>

</div>


</div>
    
