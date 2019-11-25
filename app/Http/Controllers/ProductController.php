<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Checkout;
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

    public function getRemoveItem($id){ //Quita un item entero
        $oldCart = Session::has('cart') ? Session::get('cart') : null;  //Determina si ya hay un carrito
        $cart = new Cart($oldCart); //Agarra los datos del carrito viejo
        $cart->removeItem($id); //Busca la funcion que esta en el Cart.php
        
        if($cart->items > 0){
            Session::put('cart', $cart); //Mantiene el carro si aun hay items 
        }else if($cart->items <= 0){
            Session::forget('cart'); //Borra el carro entero
            return redirect()->route('product.shoppingCart');
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
        return view('shop.checkout', ['total' => $total]); //Muestra el total
    }

    public function postStorage(Request $request){ //Crear la compra
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice; //Agarra los datos del carrito, especificamente el precio

        $checkout=new Checkout([ //Crea la fila 
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'card-name' => $request->input('card-name'),
            'card-number' => $request->input('card-number'),
            'card-expiry-month' => $request->input('card-expiry-month'),
            'card-expiry-year' => $request->input('card-expiry-year'),
            'card-cvc' => $request->input('card-cvc'),
            'total' => $cart->totalPrice,
        ]);

        $checkout->save(); //Salva al usuario
        Session::forget('cart');
        return redirect()->route('product.index')->with('alert', 'Se hizo la compra');
    }

    public function postProduct(Request $request){ //Crear el producto

        $product=new Product([ //Crea la fila 
            'imagePath' => $request->input('imagePath'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
        ]);

        $product->save(); //Salva al usuario
        return redirect()->route('admin.insertproduct')->with('alert', 'Se creó el producto');
    }


}
