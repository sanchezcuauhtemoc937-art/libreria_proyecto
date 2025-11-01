
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>


<body class="p-3 mb-2 bg-black text-white">
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Inicio</a>
      <a class="nav-link text-white" href="/productos">Productos</a>
    </div>
  </nav>

  <div class="p-3 mb-2 bg-black text-white">
    <h1>Productos</h1>
    <p>Filtrar por</p>

 <ul class="list-group">
<select class="form-select" aria-label="Default select example" class="list-group">
   
  <option selected>Selecciona el tipo de libro que deseas buscar</option>
 <li class="list-group-item">
    <option value="1" input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox" checked>
    <label class="form-check-label" for="firstCheckbox" value="1">Terror</option>
  </li>
   <li class="list-group-item">
    <option value="2" input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
    <label class="form-check-label" for="secondCheckbox" value="2">Amor</option>
  </li>
   <li class="list-group-item">
    <option value="3" input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
    <label class="form-check-label" for="thirdCheckbox">Accion</label></option>
    </li>
    </ul>
</select>

<div class="row">
    @foreach($libros as $libro)
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

  <footer class="bg-dark text-white text-center py-3 mt-5">
    Librería Cuau © 2025
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

           