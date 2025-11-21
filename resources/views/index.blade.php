<!DOCTYPE html>
<html>
 
    <head>
    <meta charset="UTF-8">
    <title>Librería</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/offcanvas.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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


            <h1 class="text-primary">Bienvenido a la Librería For Everyone</h1>
         
            <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Buscar Libro</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  class="navbar navbar-expand-lg bg-body-tertiary rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page"  href="{{ route('productos') }}">Catalogo</a>
        <a class="nav-link" href="#">Conocenos</a>
        <a class="nav-link" href="#">Ubicacion</a>
      
      </div>
    </div>
  </div>
</nav>

            <p class="lead">"Los libros no llenan estantes, llenan mentes."</p>
            <a  href="{{ route('productos') }}" class="btn btn-success">Ver catálogo</a>
        </div>
    </div>

   @if(isset($categoria))
    <h4 class="mt-3">Libros de la categoría: {{ ucfirst($categoria) }}</h4>
@endif

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

</div>
            </ul>
        </div>
        <div id="main">
            <div id="section">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Libros agregados recientemente</a>        
        </div>
    </nav>


<div class="container mt-5" >
<div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasPrincipito"
     aria-labelledby="offcanvasPrincipitoLabel" data-bs-scroll="true">
    <div class="offcanvas-header"
    >
     
        <h5 class="offcanvas-title" id="offcanvasPrincipitoLabel">El Principito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body" class="border border-primary">
        <p>
            “El Principito” es una obra poética y filosófica que relata las aventuras
            de un pequeño príncipe que viaja de planeta en planeta. En cada encuentro,
            descubre algo sobre la naturaleza humana: el amor, la amistad, la soledad y
            la búsqueda de sentido en la vida.
        </p>
    </div>
</div>
</div>

<div class="row">
    @foreach($librosRecientes as $libro)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                 <img src="{{ asset('imagenes/libro15.jpeg') }}" class="card-img-top" alt="Libro 1">
                <div class="card-body">
                    <h5 class="card-title">{{ $libro->titulo }}</h5>
                    <p class="card-text">{{ $libro->descripcion }}</p>
                    <p class="text-success fw-bold">${{ $libro->precio }} MXN</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    @endforeach
   </div>
    
  </div>


        <h1 class="text-center mb-4">Libros Mas Vendidos</h1>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro1.jpeg') }}" class="card-img-top" alt="Libro 1">
                    <div class="card-body">
                       <!-- Título clicable que abre el offcanvas -->
                <h5 class="card-title">
                    <a href="#" 
                  
                       data-bs-toggle="offcanvas" 
                       data-bs-target="#offcanvasPrincipito" 
                       aria-controls="offcanvasPrincipito"
                       class="text-decoration-none text-dark fw-bold">
                       El Principito
                    </a>
                </h5>
                        <p class="card-text">Un clásico de la literatura para todas las edades.</p>
                        <p class="text-success fw-bold">$150 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro2.jpeg') }}" class="card-img-top" alt="Libro 2">
                    <div class="card-body">
                         <h5 class="card-title">
                    <a href="#" 
                       data-bs-toggle="offcanvas" 
                       data-bs-target="#offcanvasPrincipito" 
                       aria-controls="offcanvasPrincipito"
                       class="text-decoration-none text-dark fw-bold">
                        Cien Años de Soledad
                    </a>
                </h5>
                        <p class="card-text">La obra maestra de Gabriel García Márquez.</p>
                        <p class="text-success fw-bold">$220 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro3.jpeg') }}" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">Don Quijote de la Mancha</h5>
                        <p class="card-text">La novela más influyente en lengua española.</p>
                        <p class="text-success fw-bold">$180 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
      </div>        
  </div> 

   <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro4.jpeg') }}" class="card-img-top" alt="Libro 1">
                    <div class="card-body">
                        <h5 class="card-title">El Principito</h5>
                        <p class="card-text">Un clásico de la literatura para todas las edades.</p>
                        <p class="text-success fw-bold">$150 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro5.jpeg') }}" class="card-img-top" alt="Libro 2">
                    <div class="card-body">
                        <h5 class="card-title">Cien Años de Soledad</h5>
                        <p class="card-text">La obra maestra de Gabriel García Márquez.</p>
                        <p class="text-success fw-bold">$220 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/libro6.jpeg') }}" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">Don Quijote de la Mancha</h5>
                        <p class="card-text">La novela más influyente en lengua española.</p>
                        <p class="text-success fw-bold">$180 MXN</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
      </div>        
  </div> 


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

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 </body>
</html>