@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Home') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div id="fastFoodCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#fastFoodCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#fastFoodCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#fastFoodCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/hero-bg.jpg')}}" class="d-block w-100" alt="Hamburguesas Deliciosas">
            <div class="carousel-caption text-left">
                <h1>Hamburguesas Deliciosas</h1>
                <p>Sumérgete en el sabor de nuestras hamburguesas gourmet, preparadas con carne jugosa y acompañadas de crujientes papas fritas</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{asset('assets/img/1carrusel.jpg')}}" class="d-block w-100" alt="Restaurante de Comida Rápida">
            <div class="carousel-caption">
                <h1>Restaurante de Comida Rápida.</h1>
                <p>Experimenta la comodidad y la rapidez de nuestro servicio mientras disfrutas de una amplia variedad de deliciosos platos.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/v.png')}}" class="d-block w-100" alt="Disfruta Tu Comida">
            <div class="carousel-caption text-right">
                <h1>Disfruta Tu Comida</h1>
                <p>Deléitate con nuestros platos preparados con los mejores ingredientes, desde carnes tiernas hasta vegetales frescos, para una experiencia culinaria inolvidable</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#fastFoodCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#fastFoodCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="info-section text-center">
    <div class="container">
        <h2>Sobre Nosotros</h2>
        <p>Nos dedicamos a proporcionar la mejor experiencia de comida rápida con ingredientes de alta calidad y un servicio al cliente excepcional. ¡Ven y prueba la diferencia!</p>
        <div class="row">
            <div class="col-md-4">
                <h3>Nuestra Historia</h3>
                <p>Desde nuestra fundación en 2000, hemos estado sirviendo deliciosas comidas a nuestros valiosos clientes.</p>
            </div>
            <div class="col-md-4">
                <h3>Nuestro Menú</h3>
                <p>Desde hamburguesas clásicas hasta innovadoras recetas nuevas, ofrecemos una amplia variedad de opciones para satisfacer todos los gustos.</p>
            </div>
            <div class="col-md-4">
                <h3>Contacto</h3>
                <p>¿Tienes preguntas o comentarios? Ponte en contacto con nosotros a través de nuestra página de contacto o visítanos en una de nuestras ubicaciones.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
@endsection


