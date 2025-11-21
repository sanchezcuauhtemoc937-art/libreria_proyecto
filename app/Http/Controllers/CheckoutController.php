<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Session as LaravelSession;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Exception;


class CheckoutController extends Controller
{
    //
    public function show()
    {
        $carrito = LaravelSession::get('carrito', []);
        return view('checkout', compact('carrito'));
    }

    public function process()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $carrito = LaravelSession::get('carrito', []);
        $lineItems = [];

        foreach ($carrito as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'mxn',
                    'product_data' => [
                        'name' => $item['nombre'],
                    ],
                    'unit_amount' => $item['precio'] * 100, // en centavos
                ],
                'quantity' => $item['cantidad'],
            ];
        }
        
    }

    public function success()
    {
        // Vaciar carrito
        LaravelSession::forget('carrito');
        return view('checkout_success');
    }

    public function cancel()
    {
        return view('checkout_cancel');
    }


    

}
