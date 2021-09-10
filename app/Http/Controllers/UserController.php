<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Auth;
class UserController extends Controller
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
        return view('home');
    }


    //user profile 
    public function profile()
    {
        $countries=Country::get();
        return view('screens.profile',compact('countries'));
    }

    //user chagne status translater or employer
    public function change_status(Request $request)
    {
        try
        {
            $user_id=Auth::user()->id;
            $user_data=User::find($user_id)->update([
                 'user_status'=>$request->user_status,
            ]);
            toastr()->success('User Status Changed Successfull!');
            return back();
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }

    }

    //save general info of user
    public function save_general_info(Request $request)
    {
        //user every try catch your code must bi inside try catch blcok
        try
        {
            //here your code
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //upload resume
    public function upload_resume(Request $request)
    {

    }

    //save languages
    public function user_save_languages(Request $request)
    {

    }

    //save user services rates
    public function save_services_rates()
    {

    }

    //save voice over languages
    public function save_voice_over(Request $request)
    {

    }

    //save software tools
    public function save_software_tools(Request $request)
    {

    }
    
    //save user files
    public function user_save_files(Request $request)
    {

    }
}
