<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\UserGeneralInformation;
use App\Models\UserLanguages;
use App\Models\UserVoiceOver;
use App\Models\UserSpecializations;
use App\Models\UserSoftware;
use App\Models\UserFiles;
use Auth;
use File;
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
        $userData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover')->where('id',Auth::user()->id)->get();
        //dd($userData[0]->userlanguages[0]->id);
        return view('screens.profile',compact('countries','userData'));
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
            return \Redirect::route('profile')->with('currtab',$request->currtab);
            //return back()->with('currtab',$request->currtab);
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
        
        $input=$request->except('_token','currtab');
        try
        { 
           $record=UserGeneralInformation::where('user_id',Auth::user()->id)->first();
           $input['user_id']=Auth::user()->id;
           $input['private_information']=isset($input['private_information']) ? 1 : 0;
           $input['disallow_indexing']=isset($input['disallow_indexing']) ? 1 : 0;
           $input['display_contact_info']=isset($input['display_contact_info']) ? 1 : 0;
           $input['news_notification']=isset($input['news_notification']) ? 1 : 0;
           $input['jobsnotification']=isset($input['jobsnotification']) ? 1 : 0;
           $input['show_rated_users']=isset($input['show_rated_users']) ? 1 : 0;
           if(!$record)
           {
           UserGeneralInformation::create($input);
           }
           else
           {
            UserGeneralInformation::where('user_id',Auth::user()->id)->update($input);
           }
           //toaster message
           toastr()->success('User Gneral Info Saved Successfull!');
           return back()->with('currtab',$request->currtab); 
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
        try
        {
          
          if($file = $request->file('resume'))
            {
                $path = 'files/resume/';
                if(!file_exists(public_path().'/'.$path)) 
                {
                  $path = 'files/resume/';
                   File::makeDirectory(public_path().'/'.$path,0777,true);
                } 
                if(Auth::user()->resume)//if already resume unlink resume and upload new one
                 {
                    unlink(public_path().'/files/resume/'.Auth::user()->resume);
                 }
                $name = time().$file->getClientOriginalName();
                $file->move('files/resume/',$name);
                $userModel=User::find(Auth::user()->id);
                $userModel->resume=$name;
                $userModel->save();
                //toaster message
                toastr()->success('User Resume Saved Successfull!');
                return back()->with('currtab',$request->currtab);
            }
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }

    }

    //save languages
    public function user_save_languages(Request $request)
    {
        try
        {
            $UserLanguages= new UserLanguages();
            $UserLanguages->mother_language=$request->mother_language;
            $UserLanguages->other_languages=$request->other_languages;
            $UserLanguages->user_id=Auth::user()->id;
            $UserLanguages->save();
            toastr()->success('User Language Saved Successfull!');
            return back()->with('currtab',$request->currtab);
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }

    }

    //save user services rates
    public function save_services_rates()
    {

    }

    //save voice over languages
    public function save_voice_over(Request $request)
    {
        try
        {
            $UserVoiceOver= new UserVoiceOver();
            $UserVoiceOver->language=$request->language;
            $UserVoiceOver->user_id=Auth::user()->id;
            $UserVoiceOver->save();
            toastr()->success('User VoiceOver Language Saved Successfull!');
            return back()->with('currtab',$request->currtab);
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //save specializtions
    public function save_specializations(Request $request)
    {
      try
      {
        //if record exist then delete
        $record=UserSpecializations::where('user_id',Auth::user()->id)->first();
        if($record)
        {
            UserSpecializations::where('user_id',Auth::user()->id)->update([
                'spicializations' => $request->spicializations,
            ]);
        }
        else
        {
        $UserSpecializations= new UserSpecializations();
        $UserSpecializations->spicializations=$request->spicializations;
        $UserSpecializations->user_id=Auth::user()->id;
        $UserSpecializations->save();
        }
        toastr()->success('User specializtions Saved Successfull!');
        return back()->with('currtab',$request->currtab);
      }
      catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //save software tools
    public function save_software_tools(Request $request)
    {
        try
        {
          $record=UserSoftware::where('user_id',Auth::user()->id)->first();
          if($record)
          {
            UserSoftware::where('user_id',Auth::user()->id)->update([
                   'software_tools' => $request->softwares,
            ]);
          }
          else
          {
            $UserSoftware= new UserSoftware();
            $UserSoftware->software_tools=$request->softwares;
            $UserSoftware->user_id=Auth::user()->id;
            $UserSoftware->save();
          }
          toastr()->success('User Softwares Saved Successfull!');
          return back()->with('currtab',$request->currtab);
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }

    }
    
    //save user files
    public function user_save_files(Request $request)
    {
        try
        {
          if($file = $request->file('file'))
            {
                $path = 'files/userfiles/';
                if(!file_exists(public_path().'/'.$path)) 
                {
                  $path = 'files/userfiles/';
                   File::makeDirectory(public_path().'/'.$path,0777,true);
                } 
                $name = time().$file->getClientOriginalName();
                $file->move('files/userfiles/',$name); 
            }
            $UserFiles = new UserFiles();
            $UserFiles->file_title=$request->file_title;
            $UserFiles->file=$request->file;
            $UserFiles->purpose=$request->purpose;
            $UserFiles->language=$request->language;
            $UserFiles->comments=$request->comments;
            $UserFiles->user_id=Auth::user()->id;
            $UserFiles->save();
            toastr()->success('User Files Saved Successfully!!');
            return back();
        }
        catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
