
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Vinos') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Nuestros Vinos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('assets/img/tinto.png')}}" class="card-img-top" alt="Vino 1">
          <div class="card-body">
            <h5 class="card-title">Vino Tinto</h5>
            <p class="card-text">Descubre Pruno: un vino tinto español de Ribera del Duero. Con su profundo color, aromas a frutas maduras y taninos sedosos, Pruno es la elección perfecta para acompañar tus momentos especiales. ¡Explora su elegancia en cada sorbo!</p>
            <p class="card-price">$20</p>
            <div class="card-promo">¡Oferta especial!</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('assets/img/blanco.png')}}" class="card-img-top" alt="Vino 2">
          <div class="card-body">
            <h5 class="card-title">Vino Blanco</h5>
            <p class="card-text">El vino blanco Benjamin Dulce es una exquisita combinación de uvas cuidadosamente seleccionadas que ofrecen una experiencia sensorial única. Con su característico dulzor equilibrado y refrescante, este vino es perfecto para disfrutar en cualquier ocasión.</p>
            <p class="card-price">$18</p>
            <div class="card-promo">¡25% de descuento!</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('assets/img/rosa.png')}}" class="card-img-top" alt="Vino 3">
          <div class="card-body">
            <h5 class="card-title">Vino Rosado</h5>
            <p class="card-text">El vino rosado de Reinger es una expresión encantadora de elegancia y frescura. Elaborado con una cuidadosa selección de uvas tintas, este vino cautiva con su delicado color rosa pálido y su sabor suave y afrutado</p>
            <p class="card-price">$22</p>
            <div class="card-promo">¡Promoción especial!</div>
          </div>
        </div>
      </div>
      <!-- Nuevos vinos -->
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img src="{{asset('assets/img/espumoso.png')}}" class="card-img-top" alt="Vino 4">
          <div class="card-body">
            <h5 class="card-title">Vino Espumoso</h5>
            <p class="card-text">El Champbrulé es una exquisita variante del clásico champán, que combina la frescura y la elegancia de este vino espumoso con la dulzura y el carácter único de un toque de caramelo.</p>
            <p class="card-price">$25</p>
            <div class="card-promo">¡Celebra con burbujas!</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img src="{{asset('assets/img/fortificado.png')}}" class="card-img-top" alt="Vino 5">
          <div class="card-body">
            <h5 class="card-title">Vino Fortificado</h5>
            <p class="card-text">El vino fortificado Bothe es una joya enológica que combina la tradición y la calidad en cada sorbo. Elaborado con una cuidadosa selección de uvas y enriquecido con un toque de espirituoso.</p>
            <p class="card-price">$30</p>
            <div class="card-promo">¡Intenso y aromático!</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-sm-12">
        <div class="card">
          <img src="{{asset('assets/img/postre.png')}}" class="card-img-top" alt="Vino 6">
          <div class="card-body">
            <h5 class="card-title">Vino de Postre</h5>
            <p class="card-text">El vino de postre Errazuriz es una auténtica delicia que corona cualquier comida con un toque de elegancia y dulzura. Elaborado con uvas seleccionadas de los viñedos más prestigiosos.</p>
            <p class="card-price">$28</p>
            <div class="card-promo">¡El toque final perfecto!</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/wines.css')}}">
@endsection




