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
use App\Models\Country;
use DB;

class FreelancerController extends Controller
{
     //

     public function index()
     {
          try {
               $FreelancerData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('user_status', 'Freelancer')->paginate(12);
               //freelancer of the day
               $topfreelancer = User::with('rates')
                    ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                    ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                    ->where(['users.user_status' => 'Freelancer'])
                    ->groupBy('work_histories.user_id')
                    ->orderBy('avgrate', 'Desc')
                    ->limit(1)
                    ->first();
               return view('screens.freelancer.top-freelancer', compact('FreelancerData', 'topfreelancer'));
          } catch (\Exception $exception) {
               toastr()->error('Something went wrong, try again');
               return back();
          }
     }

     //search Freelancer
     public function search_freelancer()
     {
          try {
               $allafreelancermembers = User::where('user_status', 'Freelancer')->get();
               $FreelancerData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('user_status', 'Freelancer')->get();
               $countries = Country::get();
               $worldlang = worldlanguages();
               //agency of the day
               $topagency = User::with('rates')
                    ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                    ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                    ->where(['users.user_status' => 'Employer'])
                    ->groupBy('work_histories.user_id')
                    ->orderBy('avgrate', 'Desc')
                    ->limit(1)
                    ->first();
               return view('screens.freelancer.search-freelancer', compact('FreelancerData', 'countries', 'allafreelancermembers', 'topagency', 'worldlang'));
          } catch (\Exception $exception) {
               toastr()->error('Something went wrong, try again');
               return back();
          }
     }
     public function search(Request $request)
     {
          try {
               $allafreelancermembers = User::where('user_status', 'Freelancer')->get();
               $countries = Country::get();
               $FreelancerData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')
                    ->when($request->name, function ($query) use ($request) {
                         return $query->orwhere('fname', 'like', '%' . $request->name . '%')->orwhere('lname', 'like', '%' . $request->name . '%');
                    })
                    ->when($request->keyword, function ($query) use ($request) {
                         return $query->whereHas('usergeneralinfo', function ($query) {
                              $query->orwhere('special_keywords', 'like', '%' . \Request::input('keyword') . '%');
                         });
                    })
                    ->when($request->languages, function ($query) use ($request) {
                         return $query->whereHas('userlanguages', function ($query) {
                              $query->orwhere('from_languages', '=', \Request::input('slanguages'))->orwhere('to_languages', '=', \Request::input('tlanguages'));
                         });
                    })
                    ->when($request->country, function ($query) use ($request) {
                         return $query->orwhere('country_id', '=', $request->country);
                    })
                    ->where('user_status', 'Freelancer')
                    ->get();
               $topagency = User::with('rates')
                    ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                    ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                    ->where(['users.user_status' => 'Employer'])
                    ->groupBy('work_histories.user_id')
                    ->orderBy('avgrate', 'Desc')
                    ->limit(1)
                    ->first();
               $worldlang = worldlanguages();
               return view('screens.freelancer.search-freelancer', compact('FreelancerData', 'allafreelancermembers', 'countries', 'topagency', 'worldlang'));
          } catch (\Exception $exception) {
               toastr()->error('Something went wrong, try again');
               return back();
          }
     }
}
