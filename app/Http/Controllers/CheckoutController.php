<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;




class CheckoutController extends Controller
{
    //
   // Verificar login
    public function ver(){
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors('Debes iniciar sesión para pagar.');
        }
        return view('checkout');
    }



      public function process(Request $request)
    {
        // Verificar login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors('Debes iniciar sesión para pagar.');
        }

        // Validar datos en que parte apunta ala base de datos

        $request->validate([
            'stripeToken' => 'required',
            'name' => 'required|string|max:255',
        ]);

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $charge = Charge::create([
                'amount' =>  1000, // en centavos (10.00 USD)
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Pago de prueba',
                'metadata' => [
                    'user_id' => Auth::id(),
                    'user_name' => Auth::user()->name,
                ],
            ]);

            return redirect()->route('checkout.process')->with('process', 'Pago exitoso ');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

    }


    public function success()
    {
        return view('checkout');
    }


}