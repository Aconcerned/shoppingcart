<?php

namespace App\Http\Controllers;

use App\Admin;

use App\Product;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use DB;

use Config;

use Redirect;

use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin.dashboard');
    }

    public function insertproduct(){
        return view('admin.insertproduct');
    }

    public function listuser(){
        return view('admin.usertable');
    }

    public function fetch_data(Request $request){
        if($request->ajax()){
            $data = DB::table('users')->orderBy('id')->get();
            echo json_encode($data);
        }
    }

    public function listproduct(){
        return view('admin.producttable');
    }

    public function fetch_product(Request $request){
        if($request->ajax()){
            $data = DB::table('products')->orderBy('id')->get();
            echo json_encode($data);
        }
    }

    //public function inserting(Request $request){
        //$this->validate($request, [
            //'imagePath' => 'required|unique:products',
           // 'title' => 'required|min:4',
          //  'description' => 'required|min:4',
          //  'price' => 'required|min:4',
          //  'type' => 'required|min:4',
          
       // ]); //Valida al usuario deacuerdo si es unico y su clave es mayor a 4

      //  $product=new Product([
        //    'imagePath' => $request->input('imagePath'),
        //    'title' => $request->input('title'),
        //    'price' => $request->input('price'),
        //    'type' => $request->input('type'),
       //     
            
       // ]);

       // $product->save(); //Salva al usuario
    //}

}
