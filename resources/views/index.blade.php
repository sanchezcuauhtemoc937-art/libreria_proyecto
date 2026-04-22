<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Librería</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/offcanvas.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
  </style>
</head>


<body class="p-3 mb-2 bg-black text-white">
    <div id="container">
      <div id="header">         
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
    <!-- Logo a la izquierda -->
           <a class="navbar-brand"  href="#">

          <img src="{{ asset('logos/Logo_libreria.png') }}" alt="Logo" width="300" class="logo" class="d-inline-block align-text-top">
           </a>

      <!-- Video en medio -->
    <div class="video-container mx-auto">
        <video autoplay loop muted playsinline class="video-navbar">
            <source src="{{ asset('logos/logo_animado.mp4') }}" type="video/mp4">
        </video>
    </div>



    <!-- Botón hamburguesa para móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <!-- Botones a la derecha -->
<div class="d-flex">
 <div class="d-flex flex-column align-items-end text-end">
  <div class="d-flex align-items-center text-end">

    <!-- Carrito arriba -->
     <img src="{{ asset('logos/Recurso 1.png') }}"  width="40" class="logo" class="d-inline-block align-text-ligth">
     <img src="{{ asset('logos/Recurso 2.png') }}" alt="Logo" width="40" class="logo" class="d-inline-block align-text-ligth">
     <img src="{{ asset('logos/Recurso 3.png') }}" alt="Logo" width="40" class="logo" class="d-inline-block align-text-ligth">
    

     <!-- Carrito con efecto hover -->
       <a class="navbar-brand"  href="/carrito">
    <img src="{{ asset('logos/carrito1.png') }}" 
         alt="Carrito" 
         width="50" 
         class="mb-2 carrito-img">
     </div>
       </a>
    <!-- Botón de login -->

    <a href="{{ route('login') }}" class="btn btn-outline-light mb-2">
        Iniciar Sesión / Registrarse
    </a>
    <a href="{{ route('clientes') }}" class="btn btn-outline-light mb-2">
       cliente
    </a>

    <!-- Texto de bienvenida debajo -->
    @if(Auth::check())
        <small class="text-white">Bienvenido/a, {{ Auth::user()->name }}</small>
    @else
        <small class="text-white">Bienvenido, visitante</small>
    @endif
        </div>

      </div>
    </div>
  </div>
</nav>
</div>

            
         
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <h1 class="text-primary">Librería For Everyone</h1>
    <a class="navbar-brand">Buscar Libro</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  class="navbar navbar-expand-lg bg-body-tertiary rounded">
  
    <div class="d-flex">
  <ul class="nav nav-pills mx-auto bg-dark rounded-5 shadow-sm">
    <!-- items -->
      <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-dark rounded-5 shadow-sm"
    id="pillNav2" role="tablist"
    style="--bs-nav-link-color: var(--bs-white); 
           --bs-nav-pills-link-active-color: var(--bs-dark); 
           --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
    <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Inicio</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-5" id="catalogo-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Catálogo</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-5" id="conocenos-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Conócenos</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-5" id="ubicacion-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Ubicación</button>
  </li>
</ul>
  </ul>
</div>


</nav>
</div>

  <ul class="topnav"  aria-labelledby="dropdownMenuButtonDark">
   <div class="dropdown" data-bs-theme="dark">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButtonDark" aria-expanded="false">
    Categorias
  </button>
  <ul class="dropdown-menu">

    <a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'misterio']) }}">Misterio</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'drama']) }}">Drama</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'fantasia']) }}">Fantasía</a>

 <a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'clasico']) }}">clasico</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'autoayuda']) }}">autoayuda</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'ciencia_ficcion']) }}">ciencia_ficcion</a>

 <a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'no_ficcion']) }}">no_ficcion</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'romance']) }}">romance</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'ficcion']) }}">ficcion</a>
 <a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'experimental']) }}">experimental</a>

<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'thriller']) }}">thriller/terror</a>
<a class="dropdown-item" href="{{ route('librosRecientes', ['categoria' => 'historia']) }}">historia</a>
    </ul>
   </ul>
</div>


<div id="main">
  <div id="section">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
      <div class="container-fluid d-flex align-items-center">

        <!-- Izquierda -->
        <div class="me-auto">
          <p class="lead mb-0">"Los libros no llenan estantes, llenan mentes."</p>
        </div>

        <!-- Centro -->
        <div class="mx-auto text-center">
         
            <a class="navbar-brand" href="/">Libros mas vendidos</a>
       
        </div>

        <!-- Derecha -->
        <div class="ms-auto">
          <a href="{{ route('productos') }}" class="btn btn-success">
            Ver catálogo
          </a>
        </div>
      </div>
         </nav>
         </div>
        </div>
       </div> 
</div>


<div class="container mt-5">
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLibro"
       aria-labelledby="offcanvasLibroLabel" data-bs-scroll="true">
    <div class="offcanvas-header">
       <video autoplay loop muted playsinline class="video-navbar">
            <source src="{{ asset('logos/logo_navbar.mp4') }}" type="video/mp4">
        </video>   
      <h5 class="offcanvas-title" id="offcanvasLibroLabel">Título del libro</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body border border-primary">
      <p id="descripcionLibro"></p>
      <p id="precioLibro" class="text-success fw-bold"></p>
    </div>
  </div>
</div>
@isset($librosRecientes)
<div class="container mt-5">
  <div class="row">
    @foreach($librosRecientes as $libro)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <!-- Imagen activadora -->
          <img src="{{ asset('imagenes/libro15.jpeg') }}" 
               class="card-img-top libro-img" 
               alt="{{ $libro->titulo }}"
               data-bs-toggle="offcanvas" 
               data-bs-target="#offcanvasLibro"
               data-titulo="{{ $libro->titulo }}"
               data-descripcion="{{ $libro->descripcion }}"
               data-precio="{{ $libro->precio }}">
          <div class="card-body">
            <!-- También puedes hacer el título activador -->
            <h5 class="card-title text-dark fw-bold"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasLibro"
                data-titulo="{{ $libro->titulo }}"
                data-descripcion="{{ $libro->descripcion }}"
                data-precio="{{ $libro->precio }}">
              {{ $libro->titulo }}
            </h5>
            <p class="card-text">{{ $libro->descripcion }}</p>
            <p class="text-success fw-bold">${{ $libro->precio }} MXN</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endisset

<script>
document.addEventListener('DOMContentLoaded', function() {
  var offcanvasEl = document.getElementById('offcanvasLibro');
  offcanvasEl.addEventListener('show.bs.offcanvas', function (event) {
    var trigger = event.relatedTarget;
    var titulo = trigger.getAttribute('data-titulo');
    var descripcion = trigger.getAttribute('data-descripcion');
    var precio = trigger.getAttribute('data-precio');

    document.getElementById('offcanvasLibroLabel').textContent = titulo;
    document.getElementById('descripcionLibro').textContent = descripcion;
    document.getElementById('precioLibro').textContent = "$" + precio + " MXN";
  });
});
</script>



 <div class="container mt-5">
    <h1 class="text-center mb-4">Resellas</h1>
<div class="contenedor-fluido">
 <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/foto2.jpeg" class="rounded mx-auto d-block" class="rounded" class="d-block w-60" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/foto2.jpeg" class="rounded mx-auto d-block" class="rounded" class="d-block w-60" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/foto3.jpeg" class="rounded mx-auto d-block" class="rounded" class="d-block w-60" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" class="btn btn-primary" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">        
    
  </button>
  <button class="carousel-control-next" type="button" class="btn btn-primary"  data-bs-target="#carouselExampleCaptions" data-bs-slide="next">

  </button>
</div>
</div>
</div>


<div class="contenedor-fluido">
  <!-- Content here -->
 <div id="footer">
     <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2025 Librería - Todos los derechos reservados
    
    <h2>Datos del sitio</h2>
    <p>ITSOEH</p>
    <p>Libreria</p>
    <p>luis cuauhtemoc</p>
   </div>
    </footer>
       </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 </body>
</html>