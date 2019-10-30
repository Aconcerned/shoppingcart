<?php

namespace App\Http\Controllers\Admin;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $name)
    {
        $users = User::findOrFail($name);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request, $name)
    {
        $users = User::find($name);
        $users->name = $request->imput('username');
        $users->usertype = $request->imput('usertype');
        $users->update();

        return redirect('/role-register')->with('success','your data is updated');
    }

    public function registerdelete(Request $request, $name)
    {
        $users = User::findOrFail($name);
        $users->delete();

        return redirect('/role-register')->with('success','your data is deleted');
    }
}