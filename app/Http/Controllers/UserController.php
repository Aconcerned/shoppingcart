<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Redirect;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup'); //Manda al usuario al signup
    }

    public function postSignup(Request $request){ //Crear el usuario
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'type' => User::DEFAULT_TYPE,
        ]); //Valida al usuario deacuerdo si es unico y su clave es mayor a 4

        $user=new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            
        ]);

        $user->save(); //Salva al usuario
        Auth::login($user); //Arranca la sesion
        return redirect()->route('product.index');
    }
    
    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){ //Inicio de sesion
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]); //Valida los campos

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'type' => 'cliente'])){
          return redirect()->route('product.index');
        } //Valida si el usuario es un cliente

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'type' => 'admin'])){
            return redirect()->route('admin.dashboard');
          } //Valida si el usuario es un admin

        return redirect()->back();
        }

        public function getProfile($id){
            $users = User::whereId($id)->first(); 
            return view('user.profile', compact('users', $users));
        }

    public function getLogout(){
      Auth::logout();
      Session::forget('cart');
      return redirect()->route('product.index');
    }
    }

