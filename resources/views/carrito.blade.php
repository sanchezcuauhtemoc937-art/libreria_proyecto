<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Carrito</title>
</head>
<body class="p-3 mb-2 bg-black text-white">
    <div class="container">
        <h2 class="mb-4">Tu carrito</h2>

        <div class="row">
            @foreach($carrito as $id => $item)
                <div class="col-md-6 mb-3">
                    <div class="card bg-dark text-white shadow">
                        <div class="row g-0">
                            <!-- Imagen del libro -->
                            <div class="col-4">
                                <img src="{{ asset('imagenes/libro15.jpeg') }}" 
                                     class="img-fluid rounded-start" 
                                     alt="libro1">
                            </div>
                            <!-- Detalles -->
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['nombre'] }}</h5>
                                    <p class="card-text">
                                        Precio: ${{ $item['precio'] }} <br>
                                        Cantidad: {{ $item['cantidad'] }}
                                         
                                        
                                    </p>
                                    <a href="{{ route('carrito.eliminar', $id) }}" 
                                       class="btn btn-sm btn-danger">
                                        Eliminar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        <!-- Ventana con el total -->
        </div>

        <!-- Botón de checkout -->
        <div class="mt-4">
            <a href="{{ route('checkout.show') }}" class="btn btn-success btn-lg">
                Ir a pagar
            </a>
        </div>
    </div>
</body>
</html>
