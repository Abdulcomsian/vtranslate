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
use App\Models\JobsPairLanguages;
use DB;

class AgencyController extends Controller
{
    public function index()
    {
        try {
            $AgencyData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('user_status', 'Employer')->paginate(12);
            //agency of the day
            $topagency = User::with('rates')
                ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                ->where(['users.user_status' => 'Employer'])
                ->groupBy('work_histories.user_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(1)
                ->first();
            return view('screens.agencies.top-agencies', compact('AgencyData', 'topagency'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //search agency page
    public function search_agencies()
    {
        try {
            $allagencymembers = User::where('user_status', 'Employer')->get();
            $countries = Country::get();
            $AgencyData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('user_status', 'Employer')->get();
            //agency of the day
            $topagency = User::with('rates')
                ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                ->where(['users.user_status' => 'Employer'])
                ->groupBy('work_histories.user_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(1)
                ->first();
            $worldlang = worldlanguages();
            return view('screens.agencies.search-agencies', compact('AgencyData', 'allagencymembers', 'countries', 'topagency', 'worldlang'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //search
    public function search(Request $request)
    {
        try {
            $allagencymembers = User::where('user_status', 'Employer')->get();
            $countries = Country::get();
            $AgencyData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')

                ->when($request->agencyid, function ($query) use ($request) {
                    return $query->orwhere('name', 'like', '%' . $request->name . '%')->orwhere('lname', 'like', '%' . $request->name . '%');
                })
                ->when($request->keyword, function ($query) use ($request) {
                    return $query->whereHas('usergeneralinfo', function ($query) {
                        $query->orwhere('special_keywords', 'like', '%' . \Request::input('keyword') . '%');
                    });
                })
                ->when($request->languages, function ($query) use ($request) {
                    return $query->whereHas('userlanguages', function ($query) {
                        $query->orwhere('from_languages', '=', \Request::input('alanguages'))->orwhere('to_languages', '=', \Request::input('tlanguages'));
                    });
                })
                ->when($request->country, function ($query) use ($request) {
                    return $query->orwhere('country_id', '=', $request->country);
                })
                ->where('user_status', 'Employer')

                ->get();

            //agency of the day
            $topagency = User::with('rates')
                ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                ->where(['users.user_status' => 'Employer'])
                ->groupBy('work_histories.user_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(1)
                ->first();
            $worldlang = worldlanguages();
            return view('screens.agencies.search-agencies', compact('AgencyData', 'allagencymembers', 'countries', 'topagency', 'worldlang'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
