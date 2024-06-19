
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Frapes') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->

<div class="container">
  
  <div class="section-title">Nuestro Menú de Frappés</div>

  <div class="menu-section">
    <h2 class="menu-title"><i class="bi bi-cup-straw"></i> Frappés</h2>
    <div class="menu-item">
      <img src=" {{asset('assets/img/cafe.png')}}" alt="Frappé de Café">
      <div>
        <div class="menu-item-title">Frappé de Café</div>
        <div class="menu-item-description">Delicioso frappé de café con crema batida.</div>
        <div class="menu-item-price">$5.00</div>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{asset('assets/img/fre.png')}}" alt="Frappé de Fresa">
      <div>
        <div class="menu-item-title">Frappé de Fresa</div>
        <div class="menu-item-description">Refrescante frappé de fresa con trozos de fruta.</div>
        <div class="menu-item-price">$5.50</div>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{asset('assets/img/choco.png')}}" alt="Frappé de Chocolate">
      <div>
        <div class="menu-item-title">Frappé de Chocolate</div>
        <div class="menu-item-description">Cremoso frappé de chocolate con sirope de chocolate.</div>
        <div class="menu-item-price">$6.00</div>
      </div>
    </div>
    <div class="menu-item">
      <img src=" {{asset('assets/img/man.png')}}" alt="Frappé de Mango">
      <div>
        <div class="menu-item-title">Frappé de Mango</div>
        <div class="menu-item-description">Exótico frappé de mango con un toque de limón.</div>
        <div class="menu-item-price">$5.50</div>
      </div>
    </div>
    <div class="menu-item">
      <img src=" {{asset('assets/img/vainilla.png')}}" alt="Frappé de Vainilla">
      <div>
        <div class="menu-item-title">Frappé de Vainilla</div>
        <div class="menu-item-description">Clásico frappé de vainilla con crema batida.</div>
        <div class="menu-item-price">$5.00</div>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{asset('assets/img/coco.png')}}" alt="Frappé de Coco">
      <div>
        <div class="menu-item-title">Frappé de Coco</div>
        <div class="menu-item-description">Refrescante frappé de coco con trozos de coco.</div>
        <div class="menu-item-price">$6.00</div>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{asset('assets/img/menta.png')}}" alt="Frappé de Menta">
      <div>
        <div class="menu-item-title">Frappé de Menta</div>
        <div class="menu-item-description">Refrescante frappé de menta con chocolate.</div>
        <div class="menu-item-price">$5.50</div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fraps.css')}}">
@endsection






