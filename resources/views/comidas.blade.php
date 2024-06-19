@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Comidas') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container">
    <div class="section-title">Nuestro Menú</div>
    <div class="menu-section">
      
      <h2 class="menu-title"><i class="bi bi-egg-fried"></i> Entradas</h2>
      <div class="menu-item">
        <img src="{{asset('assets/img/Carpaccio.png')}}" alt="Carpaccio de Res">
        <div>
          <div class="menu-item-title">Carpaccio de Res</div>
          <div class="menu-item-description">Delgadas láminas de carne de res con rúcula, queso parmesano y aderezo de limón.</div>
          <div class="menu-item-price">$15.00</div>
        </div>
      </div>

      <div class="menu-item">
        <img src="{{asset('assets/img/tartar.png')}}" alt="Tartar de Atún">
        <div>
          <div class="menu-item-title">Tartar de Atún</div>
          <div class="menu-item-description">Cubos de atún fresco con aguacate, salsa de soya y sésamo.</div>
          <div class="menu-item-price">$18.00</div>
        </div>
      </div>
      
      <div class="menu-item">
        <img src=" {{asset('assets/img/camarones.png')}}" alt="Camarones al Ajillo">
        <div>
          <div class="menu-item-title">Camarones al Ajillo</div>
          <div class="menu-item-description">Camarones salteados con ajo, perejil y vino blanco.</div>
          <div class="menu-item-price">$20.00</div>
        </div>
      </div>
    </div>
  
    <div class="menu-section">
      <h2 class="menu-title"><i class="bi bi-gear-fill"></i> Platos Principales</h2>
      <div class="menu-item">
        <img src="{{asset('assets/img/carne.png')}}" alt="Filete Mignon">
        <div>
          <div class="menu-item-title">Filete Mignon</div>
          <div class="menu-item-description">Filete de res con salsa de vino tinto y champiñones, acompañado de puré de papas.</div>
          <div class="menu-item-price">$30.00</div>
        </div>
      </div>
      <div class="menu-item">
        <img src="{{asset('assets/img/salmon.png')}}" alt="Salmón al Horno">
        <div>
          <div class="menu-item-title">Salmón al Horno</div>
          <div class="menu-item-description">Salmón al horno con hierbas frescas, acompañado de verduras asadas.</div>
          <div class="menu-item-price">$28.00</div>
        </div>
      </div>
      <div class="menu-item">
        <img src="{{asset('assets/img/hamburguesa.png')}}" alt="Hamburguesa Gourmet">
        <div>
          <div class="menu-item-title">Hamburguesa Gourmet con Papas</div>
          <div class="menu-item-description">Hamburguesa de carne de res con queso cheddar, bacon, cebolla caramelizada y salsa especial, acompañada de papas fritas crujientes.</div>
          <div class="menu-item-price">$22.00</div>
        </div>
      </div>
      <div class="menu-item">
        <img src=" {{asset('assets/img/pasta.png')}}" alt="Pasta con Camarones">
        <div>
          <div class="menu-item-title">Pasta con Camarones</div>
          <div class="menu-item-description">Pasta al dente con camarones en una salsa de crema y ajo.</div>
          <div class="menu-item-price">$24.00</div>
        </div>
      </div>
    </div>
  
    <div class="menu-section">
      <h2 class="menu-title"><i class="bi bi-cupcake"></i> Postres</h2>
      <div class="menu-item">
        <img src=" {{asset('assets/img/tira.png')}}" alt="Tiramisú">
        <div>
          <div class="menu-item-title">Tiramisú</div>
          <div class="menu-item-description">Postre italiano con capas de bizcocho empapado en café, crema de mascarpone y cacao.</div>
          <div class="menu-item-price">$10.00</div>
        </div>
      </div>
      <div class="menu-item">
        <img src=" {{asset('assets/img/creme.png')}}" alt="Crème Brûlée">
        <div>
          <div class="menu-item-title">Crème Brûlée</div>
          <div class="menu-item-description">Crema de vainilla con una capa crujiente de azúcar caramelizado.</div>
          <div class="menu-item-price">$12.00</div>
        </div>
      </div>
      <div class="menu-item">
        <img src="{{asset('assets/img/rojos.png')}}" alt="Cheesecake de Frutos Rojos">
        <div>
          <div class="menu-item-title">Cheesecake de Frutos Rojos</div>
          <div class="menu-item-description">Tarta de queso con una base crujiente y cobertura de frutos rojos.</div>
          <div class="menu-item-price">$11.00</div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/foods.css')}}">
@endsection

