 <!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pago</title>

 <div class="mt-4">
            <a href="{{ route('checkout.success') }}" class="btn btn-success btn-lg">
                Ir a pagar
            </a>
        </div>
</head>
<body class="p-3 mb-2 bg-black text-white">
    <div class="container" style="max-width: 600px; margin-top: 50px;" >
        @if(Auth::check())
        <small class="text-white">Bienvenido/a, {{ Auth::user()->name }}</small>
    @else
        <small class="text-white">Bienvenido, visitante</small>
    @endif
    <h2 class="mb-4">Pago Exitoso</h2>
    <div class="alert alert-success">
        <h4 class="alert-heading">¡Gracias por su compra!</h4>
        <p>Su pago ha sido procesado exitosamente.</p>
        <hr>
        <p class="mb-0">Le enviaremos un correo de confirmación con los detalles de su compra.</p>
    </div>
</div>
</body>
</html>


