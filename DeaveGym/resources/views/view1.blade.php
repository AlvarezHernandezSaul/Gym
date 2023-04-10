@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Dv.png') }}">
@section('title', 'DeaveGym')

@section('content')

<div class="container " style="margin: 0cm;">
    <div>
        <div>
            <video autoplay muted width="1300" height="750" id="videoPlayer" loop >
              <source src="{{ asset('img/brand/Bienvenida1.mp4') }}" type="video/mp4">
            </video>
            <div class="center">
                <h1 class="text-center fs-1 fw-bold">MEMBRESIAS</h1>
                <h3 class="text-center fs-3 ">Tenemos el plan ideal para ti</h3>
            </div>
            <p></p>
            <p></p>
            <p></p>
            <div>
              <div class="row justify-content-between">
                <div class="col-sm-3">
                  <div class="card text-white mb-4" style="background-color: #07ca07; width: 20rem; margin-right: 1.5cm; margin-left: 1.5cm;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Mensualidad (1 mes)</h5>
                      <p></p>
                      <p></p>
                      <p class="card-text">Cambia tu vida con solo una decisión.</p>
                      <p></p>
                      <p></p>
                      <div class="text-center">
                        <h1>$400</h1>
                          <p><i class="fas fa-check"></i>inscripción $100</p>
                      </div>
                      <p></p>
                      <h1 class="text-center">Esta es una gran decisión!!!</h1>
                      <p></p>
                      <p class="text-center"><i class="fas fa-check"></i> Usted realizara su pago de manera electronica o personal y cuando se presente en el gym lo muestra para que se le de un recibo de la cantidad que pago. </p>                      <p></p>
                      <p class="text-center"> <i class="fas fa-dumbbell fa-5x"></i></p>

                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-white mb-4" style="background-color: #07ca07; width: 22rem; margin-right: 1.5cm; margin-left: 1.5cm;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Semestral (6 meses)</h5>
                      <p></p>
                      <p></p>
                      <p class="card-text">Cambia tu vida con solo una decisión.</p>
                      <p></p>
                      <p></p>
                      <div class="text-center">
                        <h1>$2200</h1>
                          <p><i class="fas fa-check"></i>inscripción gratis</p>
                      </div>
                      <p></p>
                      <h1 class="text-center">Esta es una excelente decisión!!!</h1>
                      <p></p>
                      <p class="text-center"><i class="fas fa-check"></i> Usted realizara su pago de manera electronica o personal y cuando se presente en el gym lo muestra para que se le de un recibo de la cantidad que pago. </p>                      <p></p>
                      <p class="text-center"> <i class="fas fa-dumbbell fa-5x"></i></p>

                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-white mb-4" style="background-color: #07ca07; width: 24rem; margin-right: 1.5cm; margin-left: 1.5cm;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Anualidad (12 Meses)</h5>
                      <p></p>
                      <p></p>
                      <p class="card-text">Cambia tu vida con solo una decisión.</p>
                      <p></p>
                      <p></p>
                      <div class="text-center">
                        <h1>$4400</h1>
                          <p><i class="fas fa-check"></i>inscripción gratis</p>
                      </div>
                      <p></p>
                      <h1 class="text-center">Esta es la mejor decisión que puedas tomar!!!</h1>
                      <p></p>
                      <p class="text-center"><i class="fas fa-check"></i> Usted realizara su pago de manera electronica o personal y cuando se presente en el gym lo muestra para que se le de un recibo de la cantidad que pago. </p>                      <p></p>
                                        </div>
                                       <p class="text-center"> <i class="fas fa-dumbbell fa-5x"></i></p>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
