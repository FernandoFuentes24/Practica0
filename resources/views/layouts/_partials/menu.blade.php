
<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src=" {{asset('assets/img/OIG3.png')}}" class="logo">
        <div>
          <div class="navbar-brand-text">M&M&F</div>
          <div class="navbar-brand-subtext">Restaurant & Bar</div>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}"><i class="bi bi-house-door"></i>Inicio</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}"><i class="bi bi-info-circle"></i> Conócenos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-basket"></i> Productos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('wines')}}"><i class="bi bi-cup-straw"></i> Vinos</a></li>
              <li><a class="dropdown-item" href="{{route('foods')}}"><i class="bi bi-egg-fried"></i> Comidas</a></li>
              <li><a class="dropdown-item" href="{{route('juices')}}"><i class="bi bi-cup-straw"></i> Jugos</a></li>
              <li><a class="dropdown-item" href="{{route('fraps')}}"><i class="bi bi-cup-fill"></i> Frappes</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('news')}}"><i class="bi bi-newspaper"></i> Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}"><i class="bi bi-envelope"></i> Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

