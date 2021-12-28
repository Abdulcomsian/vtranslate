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
                if (Auth::user()->total_profile_section == count(Auth::user()->mark_profile_section ?? [])) {
                    return $next($request);
                } else {
                    toastr()->error('Please Complete Profile 100% to proceed!');
                    if (Auth::user()->mark_profile_section && Auth::user()->user_status == "Translator") {
                        if (!in_array(1, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete General section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(2, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Resume section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(3, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Language section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(4, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Mothrt Language section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(5, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Serive Rate  section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(6, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Voice Over Language section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(7, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Specialization section to complete Your Profile 100% to proceed!');
                        } elseif (!in_array(8, Auth::user()->mark_profile_section)) {
                            toastr()->error('Please Complete Software section to complete Your Profile 100% to proceed!');
                        }
                    }
                    return redirect('user/profile');
                }
            } else {
                return $next($request);
            }
        } else {
            return redirect('/login');
        }
    }
}
