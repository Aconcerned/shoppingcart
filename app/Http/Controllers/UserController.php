<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Redirect;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup'); //Manda al usuario al signup
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]); //Valida al usuario deacuerdo si es unico y su clave es mayor a 4

        $user=new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            
        ]);

        $user->save();
        return redirect()->route('product.index');
    }
    
    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]); //Valida los campos

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'type' => 'cliente'])){
          return redirect()->route('user.profile');
        } //Valida si el usuario es un cliente

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'type' => 'admin'])){
            return redirect()->route('admin.dashboard');
          } //Valida si el usuario es un admin

        return redirect()->back();
        }

    public function getProfile(){
        return view('user.profile');
    }
    }

