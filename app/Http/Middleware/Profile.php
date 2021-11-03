<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile
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
            if (Auth::user()->user_status != "Admin") {
                if(Auth::user()->total_profile_section==Auth::user()->mark_profile_section)
                {
                    return $next($request);
                }else
                {
                     toastr()->error('Please Complete Your Profile to proceed!');
                     return redirect('user/profile');
                }
                
            } else {
               return $next($request);
            }
        } else {
            return redirect('/');
        }
    }
}
