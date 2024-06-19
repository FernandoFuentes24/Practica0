
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Noticias') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container">
  <div class="news-section">
    <h2 class="news-title"><i class="bi bi-newspaper"></i> Últimas Noticias</h2>
    <div class="news-item">
      <div class="news-item-title">Nueva Sucursal Abierta</div>
      <div class="news-item-description">¡Hemos abierto una nueva sucursal en el centro de la ciudad!</div>
    </div>
    <div class="news-item">
      <div class="news-item-title">Horario Extendido</div>
      <div class="news-item-description">Ahora estamos abiertos hasta más tarde para servirte mejor.</div>
    </div>
  </div>

  <div class="sucursales-section">
    <h2 class="sucursales-title"><i class="bi bi-geo-alt"></i> Nuestras Sucursales</h2>
    <ul class="sucursales-list">
      <li class="sucursal-item">
        <div class="sucursal-item-title">Sucursal Central</div>
        <div class="sucursal-item-address">123 Calle Principal, Ciudad Principal</div>
      </li>
      <li class="sucursal-item">
        <div class="sucursal-item-title">Sucursal Norte</div>
        <div class="sucursal-item-address">456 Calle Norte, Ciudad Principal</div>
      </li>
      <li class="sucursal-item">
        <div class="sucursal-item-title">Sucursal Sur</div>
        <div class="sucursal-item-address">789 Calle Sur, Ciudad Principal</div>
      </li>
    </ul>
    <div id="map"></div>
  </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/news.css')}}">
<script src="{{asset('assets/js/map.js')}}"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap&callback=initMap"></script>

@endsection






