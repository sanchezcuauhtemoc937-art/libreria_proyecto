<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <title>Registrar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

  <div class="container mt-5">
    <h2>Registrar Cliente</h2>
    @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif


    <!-- Mensaje de éxito (puedes mostrarlo con JS si lo necesitas) -->
    <div class="alert alert-success d-none" id="successMessage">
      Cliente registrado correctamente.
    </div>

    <form method="POST" action="{{ route('clientes.store') }}">
      <!-- Token CSRF si lo necesitas en Laravel -->
      {{ csrf_field() }}

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control">
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" name="direccion" id="direccion" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>
</body>
</html>