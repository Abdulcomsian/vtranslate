<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsPairLanguages;
use App\Models\User;
use App\Models\Country;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $countries=Country::get();
         $totaltranslater=User::where('user_status','Translator')->count();
         $jobs=jobs::with('jobspairlang')->get();
         return view('screens.home',compact('jobs','totaltranslater','countries'));
    }
}
