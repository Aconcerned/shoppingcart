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
    public function __construct() //Obtiene el middleware de Auth
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin.dashboard'); //Muestra el dashboard
    }

    public function insertproduct(){
        return view('admin.insertproduct'); //Muestra el formulario de insertar productos
    }

    public function listuser(){
        return view('admin.usertable'); //Muestra la tabla de usuarios
    }

    public function fetch_data(Request $request){ //Se trae los datos de los usuarios
        if($request->ajax()){
            $data = DB::table('users')->orderBy('id')->get();
            echo json_encode($data);
        }
    }

    public function listproduct(){
        return view('admin.producttable'); //Muestra la tabla de productos
    }

    public function graphic(){ //Crea la Google Graphic los datos de la base de datos
        $data = DB::table('products')
        ->select(
         DB::raw('type as type'),
         DB::raw('count(*) as number'))
        ->groupBy('type')
        ->get();
      $array[] = ['Gender', 'Number'];
      foreach($data as $key => $value)
      {
       $array[++$key] = [$value->type, $value->number];
      }
      return view('admin.lineas')->with('type', json_encode($array));
    }

    public function fetch_product(Request $request){ //Se trae los productos
        if($request->ajax()){
            $data = DB::table('products')->orderBy('id')->get();
            echo json_encode($data);
        }
    }

    public function add_data(Request $request){
        if($request->ajax())
        {
         $data = array(
             'type' => $request->type
         );
         $id = DB::table('users')->insert($data);
         if($id > 0){
             echo '<div class="alert alert-success">Data Inserted</div>';
         }

        }
    }

    public function deleteuser(Request $request){
        if($request->ajax())
        {
            DB::table('users')->where('id', $request->id)->delete();
            echo '<div class="alert alert-success">Data deleted</div>';
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
