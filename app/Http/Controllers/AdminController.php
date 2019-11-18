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

    public function listuser2(){
        $users = DB::table('users')->select('*');
        return datatables()->of($users)->make(true);
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
