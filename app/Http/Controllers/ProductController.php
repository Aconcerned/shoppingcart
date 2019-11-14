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

    public function getReducedByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;  //Determina si ya hay un carrito
        $cart = new Cart($oldCart); //Agarra los datos del carrito viejo
        $cart->reduceByOne($id); //Busca la funcion que esta en el Cart.php
        Session::put('cart', $cart);
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;  //Determina si ya hay un carrito
        $cart = new Cart($oldCart); //Agarra los datos del carrito viejo
        $cart->removeItem($id); //Busca la funcion que esta en el Cart.php
        
        if($cart->items > 0){
            Session::put('cart', $cart); //Mantiene el carro si aun hay items 
        }else{
            Session::forget('cart'); //Borra el carro entero
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if(!Session::has('cart')){ //Agarra y muestra el carro 
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        return view('shop.shopping-cart', ['products' => $cart->items, 
        'totalPrice' => $cart->totalPrice]);
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
