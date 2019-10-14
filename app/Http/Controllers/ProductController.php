<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex(){ //Muestra el index
        $products = Product::all(); //Se trae los productos del modelo
        return view('shop.index', ['products' => $products]);
    }
}
