<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Redirect;

class AdminMiddleware
{
    /**
     * Handel an Incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->usertype == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return redirect('product.index');
        }

    }
}