<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex(){ //Muestra el index
        $products = Product::all(); //Se trae los productos del modelo
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id); //Agarra la id del producto
        $oldCart = Session::has('cart') ? Session::get('cart') : null;  //Determina si ya hay un carrito
        $cart = new Cart($oldCart); //Agarra los datos del carrito viejo
        $cart->add($product, $product->id); //Mete los productos

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getCart(){
        if(!Session::has('cart')){ //Agarra y muestra el carro 
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){ //Muestra el checkout
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);

    }
}
