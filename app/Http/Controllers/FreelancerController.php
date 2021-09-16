<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserGeneralInformation;
use App\Models\UserLanguages;
use App\Models\UserVoiceOver;
use App\Models\UserSpecializations;
use App\Models\UserSoftware;
use App\Models\UserFiles;
use App\Models\UserMotherLanguages;
use App\Models\UserServicesRates;
use DB;

class FreelancerController extends Controller
{
    //

    public function index()
    {
        
        $FreelancerData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Translator')->paginate(12);
         return view('screens.freelancer.top-freelancer',compact('FreelancerData'));
    }

    //search Freelancer
    public function search_freelancer()
    {

         $FreelancerData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Translator')->get();
         return view('screens.freelancer.search-freelancer',compact('FreelancerData'));
    }
    public function search(Request $request)
    {
         $FreelancerData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')
         ->where('user_status','Translator')
          ->when($request->freelancerid, function($query) use ($request){
              return $query->where('id', $request->freelancerid);
          })
           ->when($request->keyword, function($query) use ($request){
              return $query->whereHas('usergeneralinfo', function($query) {
                    $query->orwhere('special_keywords', '=', \Request::input('keyword'));
                    });
          })
         ->when($request->languages, function($query) use ($request){
              return $query->whereHas('userlanguages', function($query) {
                    $query->orwhere('from_languages', '=', \Request::input('languages'))->orwhere('to_languages', '=', \Request::input('languages'));
                    });
          })
         ->get();
         return view('screens.freelancer.search-freelancer',compact('FreelancerData'));
        
    }
}
