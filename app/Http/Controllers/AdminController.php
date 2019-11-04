<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin.dashboard');
    }

}
