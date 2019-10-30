<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Redirect;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('admin.dashboard'); //Manda al usuario al signup
    }

}
