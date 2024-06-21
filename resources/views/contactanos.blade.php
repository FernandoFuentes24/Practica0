
@extends('layouts.landingPage') 
<!--Esto sirve para extender la plantilla landingPage -->
<!-- y no tener que repetir el código de la plantilla en cada vista -->

@section('title','Contactanos') <!--Esto sirve para definir el título de la página -->

@section('content') <!--Esto sirve para definir el contenido principal de la pagina el carrucel de imagenes e info adicional -->
<div class="container mt-5">
  <!-- Mostrar mensaje de éxito si existe -->
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "¡Success!",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            });
        </script>
    @endif

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center">
            <h4 class="mb-0"><i class="bi bi-concierge-bell"></i>Atención al Cliente</h4>
          </div>
          <div class="card-body p-4">
            <form method="POST"action="{{route('contact')}}" >
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                  <input type="tel" class="form-control" name="phone" placeholder="Ingrese su número de teléfono" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Fecha de Visita</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                  <input type="date" class="form-control" name="visit_date" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="rating" class="form-label">Calificación de la Experiencia</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-star"></i></span>
                  <select class="form-select" name="rating" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">1 - Muy Mala</option>
                    <option value="2">2 - Mala</option>
                    <option value="3">3 - Regular</option>
                    <option value="4">4 - Buena</option>
                    <option value="5">5 - Excelente</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-chat"></i></span>
                  <textarea class="form-control" name="comments" rows="4" placeholder="Ingrese sus comentarios" required></textarea>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="button" class="btn btn-primary"><i class="bi bi-send"></i> Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection 

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
@endsection








