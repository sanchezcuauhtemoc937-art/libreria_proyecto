<!DOCTYPE html>
<html lang="en">
<head>
   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pago</title>
</head>
<body>
    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($errors->any())
    <p style="color: red;">{{ $errors->first() }}</p>
@endif

<form action="{{ route('checkout.process') }}" method="POST" id="payment-form">
    @csrf
    <input type="text" name="name" placeholder="Nombre en la tarjeta" required>
    <div id="card-element"></div>
    <button type="submit">Pagar</button>
</form>

<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const {token, error} = await stripe.createToken(card);
        if (error) {
            alert(error.message);
        } else {
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    });
</script>
   

</body>
</html>