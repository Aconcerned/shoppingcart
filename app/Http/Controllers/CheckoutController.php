<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Checkout;

use Redirect;

use Session;

class CheckoutController extends Controller
{
    public function postStorage(Request $request){ //Crear el usuario

        $checkout=new Checkout([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'card-name' => $request->input('card-name'),
            'card-number' => $request->input('card-number'),
            'card-expiry-month' => $request->input('card-expiry-month'),
            'card-expiry-year' => $request->input('card-expiry-year'),
            'card-cvc' => $request->input('card-cvc'),
            'total' => $request->input('total'),
        ]);

        $checkout->save(); //Salva al usuario
        return redirect()->route('product.index');
    }
}
