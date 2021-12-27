<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsPairLanguages;
use App\Models\User;
use App\Models\Country;
use App\Models\WorkHistory;
use DB;
use Auth;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        // try {
        if (Auth::check()) {
            if (Auth::user()->user_status != "Admin") {
                if (Auth::user()->total_profile_section == count(Auth::user()->mark_profile_section ?? [])) {
                } else {
                    if (Auth::user()->mark_profile_section) {
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
                    } else {
                        toastr()->error('Please Complete Profile 100% to proceed!');
                    }
                    return redirect('user/profile');
                }
            }
        }
        //approved all jobs whos posted 4 hours before
        make_job_approved(); //function in helper file
        $countries = Country::get();
        //Agency of the day
        $toprateagency = User::with('rates')
            ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
            ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
            ->where(['users.user_status' => 'Employer'])
            ->groupBy('work_histories.user_id')
            ->orderBy('avgrate', 'Desc')
            ->limit(2)
            ->get();
        //freelancer of the day
        $topfreelancer = User::with('rates')
            ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
            ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
            ->where(['users.user_status' => 'Freelancer'])
            ->groupBy('work_histories.user_id')
            ->orderBy('avgrate', 'Desc')
            ->limit(2)
            ->get();
        //top category(languages)
        $toplang = DB::table('work_histories')
            ->join('jobs_pair_languages', 'jobs_pair_languages.jobs_id', '=', 'work_histories.jobs_id')
            ->select('jobs_pair_languages.*', DB::raw('count(jobs_pair_languages.id) as totallan'))
            ->orderBy('totallan', 'Desc')
            ->groupBy('jobs_pair_languages.from_lang')
            ->limit(3)
            ->get();

        $totaltranslater = User::where('user_status', 'Freelancer')->count();
        $completedjob = Jobs::where('status', 4)->count();
        $jobs = jobs::with('user')->with('jobspairlang')->with('jobproposals')->where('status', 1)->paginate(20);
        return view('screens.home', compact('jobs', 'totaltranslater', 'countries', 'toprateagency', 'topfreelancer', 'toplang', 'completedjob'));
        // } catch (\Exception $exception) {
        //     toastr()->error('Something went wrong, try again');
        //     return back();
        // }
    }
    //search job on home page
    public function job_search(Request $request)
    {
        try {
            $jobs = Jobs::with('jobspairlang')->with('user')
                ->where('status', 1)
                ->when($request->job_type, function ($query) use ($request) {
                    return $query->where('job_type', $request->job_type);
                })
                ->when($request->country, function ($query) use ($request) {
                    $query = $query->whereHas('user', function ($query) {
                        $query->where('country_id', '=', \Request::input('country'));
                    });
                })
                ->when($request->language, function ($query) use ($request) {
                    return $query->whereHas('jobspairlang', function ($query) {
                        $query->where('from_lang', '=', \Request::input('slanguage'))->orwhere('to_lang', '=', \Request::input('tlanguage'));
                    });
                })
                ->paginate(20);
            //Agency of the day
            $toprateagency = User::with('rates')
                ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                ->where(['users.user_status' => 'Employer'])
                ->groupBy('work_histories.user_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(2)
                ->get();
            //freelancer of the day
            $topfreelancer = User::with('rates')
                ->join('work_histories', 'users.id', '=', 'work_histories.user_id')
                ->select('users.*', DB::raw('avg(rating) as avgrate,count(rating) as totalreview'))
                ->where(['users.user_status' => 'Freelancer'])
                ->groupBy('work_histories.user_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(2)
                ->get();
            //top category(languages)
            $toplang = DB::table('work_histories')
                ->join('jobs_pair_languages', 'jobs_pair_languages.jobs_id', '=', 'work_histories.jobs_id')
                ->select('jobs_pair_languages.*', DB::raw('count(jobs_pair_languages.id) as totallan'))
                ->orderBy('totallan', 'Desc')
                ->groupBy('jobs_pair_languages.from_lang')
                ->limit(3)
                ->get();
            $countries = Country::get();
            $completedjob = Jobs::where('status', 4)->count();
            $totaltranslater = User::where('user_status', 'Freelancer')->count();
            return view('screens.home', compact('jobs', 'totaltranslater', 'countries', 'toprateagency', 'topfreelancer', 'toplang', 'completedjob'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //search job on top header home page
    public function search_job(Request $request)
    {
        try {
            $jobs = Jobs::with('jobspairlang')->with('user')
                ->where('status', 1)
                ->when($request->job_type, function ($query) use ($request) {
                    return $query->where('job_type', $request->job_type);
                })
                ->when($request->country, function ($query) use ($request) {
                    $query = $query->whereHas('user', function ($query) {
                        $query->where('country_id', '=', \Request::input('country'));
                    });
                })
                ->when($request->language, function ($query) use ($request) {
                    return $query->whereHas('jobspairlang', function ($query) {
                        $query->where('from_lang', '=', \Request::input('slanguage'))->orwhere('to_lang', '=', \Request::input('tlanguage'));
                    });
                })
                ->paginate(20);
            $countries = Country::get();
            return view('screens.search-job', compact('countries', 'jobs'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
