
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Jugos') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container">
    <div class="section-title">Nuestro Jugos</div>
    <div class="menu-section">

      <h2 class="menu-title"><i class="bi bi-cup-straw"></i> Jugos</h2>
      <div class="menu-item">
        <img src=" {{asset('assets/img/naranja.png')}}" alt="Jugo de Naranja">
        <div>
          <div class="menu-item-title">Jugo de Naranja</div>
          <div class="menu-item-description">Jugo de naranja recién exprimido.</div>
          <div class="menu-item-price">$5.00</div>
        </div>
      </div>

      <div class="menu-item">
        <img src=" {{asset('assets/img/fresa.png')}}" alt="Jugo de Fresa">
        <div>
          <div class="menu-item-title">Jugo de Fresa</div>
          <div class="menu-item-description">Jugo de fresas frescas.</div>
          <div class="menu-item-price">$6.00</div>
        </div>
      </div>

      <div class="menu-item">
        <img src=" {{asset('assets/img/mango.png')}} " alt="Jugo de Mango">
        <div>
          <div class="menu-item-title">Jugo de Mango</div>
          <div class="menu-item-description">Jugo de mango maduro.</div>
          <div class="menu-item-price">$6.50</div>
        </div>
      </div>

      <div class="menu-item">
        <img src= "{{asset('assets/img/piña.png')}}" alt="Jugo de Piña">
        <div>
          <div class="menu-item-title">Jugo de Piña</div>
          <div class="menu-item-description">Refrescante jugo de piña natural.</div>
          <div class="menu-item-price">$5.50</div>
        </div>
      </div>

      <div class="menu-item">
        <img src="{{asset('assets/img/sandia.png')}}" alt="Jugo de Sandía">
        <div>
          <div class="menu-item-title">Jugo de Sandía</div>
          <div class="menu-item-description">Dulce y jugoso jugo de sandía fresca.</div>
          <div class="menu-item-price">$7.00</div>
        </div>
      </div>
      </div>

      <div class="menu-section">
        <h2 class="menu-title"><i class="bi bi-cup-straw"></i> Sodas</h2>
        <div class="menu-item">
          <img src=" {{asset('assets/img/coca.png')}}" alt="Soda de Cola">
          <div>
            <div class="menu-item-title">Soda de Cola</div>
            <div class="menu-item-description">Refresco de cola frío y burbujeante.</div>
            <div class="menu-item-price">$2.00</div>
          </div>
        </div>

        <div class="menu-item">
          <img src=" {{asset('assets/img/sprite.png')}}" alt="Soda de Limón">
          <div>
            <div class="menu-item-title">Soda de Limón</div>
            <div class="menu-item-description">Refresco de limón con hielo.</div>
            <div class="menu-item-price">$2.50</div>
          </div>
        </div>

        <div class="menu-item">
          <img src=" {{asset('assets/img/fanta.png')}}" alt="Soda de Naranja">
          <div>
            <div class="menu-item-title">Soda de Naranja</div>
            <div class="menu-item-description">Refresco de naranja frío y refrescante.</div>
            <div class="menu-item-price">$2.50</div>
          </div>
        </div>
        
        <div class="menu-item">
          <img src=" {{asset('assets/img/uva.png')}}" alt="Soda de Uva">
          <div>
            <div class="menu-item-title">Soda de Uva</div>
            <div class="menu-item-description">Refresco de uva con gas.</div>
            <div class="menu-item-price">$2.50</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/juices.css')}}">
@endsection






