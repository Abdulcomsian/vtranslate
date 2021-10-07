<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->user_status == "Admin") {
                return $next($request);
            } else {
                toastr()->error('You are not an Authorized person please contact admin');
                return back();
            }
        } else {
            return redirect('/');
        }
    }
}
