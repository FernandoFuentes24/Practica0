
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Conocenos') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Visión</h5>
              <p class="card-text">Nuestra visión en M&M&F Restaurant & Bar es convertirnos en el destino gastronómico preferido para los amantes de la buena comida y la excelencia en el servicio. Nos esforzamos por ser reconocidos como líderes en innovación culinaria y en la creación de experiencias memorables para nuestros clientes.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Misión</h5>
              <p class="card-text">Nuestra misión es ofrecer a nuestros clientes una experiencia culinaria excepcional que combine la frescura de los ingredientes, la creatividad en la presentación de platos y la calidez de nuestro servicio. Nos comprometemos a superar las expectativas de nuestros comensales en cada visita, creando momentos inolvidables en un ambiente acogedor y sofisticado.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/conocenos.css')}}">
@endsection






