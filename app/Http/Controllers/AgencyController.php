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

class AgencyController extends Controller
{
    public function index()
    {
        $AgencyData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Employer')->paginate(12);
         return view('screens.agencies.top-agencies',compact('AgencyData'));
    }

    //search agency page
    public function search_agencies()
    {
        $allagencymembers=User::where('user_status','Employer')->get();
         $AgencyData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Employer')->get();
         return view('screens.agencies.search-agencies',compact('AgencyData','allagencymembers'));
    }

    //search
    public function search(Request $request)
    {
        $allagencymembers=User::where('user_status','Employer')->get();
        $AgencyData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')
          
          ->when($request->agencyid, function($query) use ($request){
              return $query->orwhere('id', $request->agencyid);
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
          ->where('user_status','Employer')
        
         ->get();
         return view('screens.agencies.search-agencies',compact('AgencyData','allagencymembers'));
    }
}
