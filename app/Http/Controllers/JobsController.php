<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsPairLanguages;
use Auth;

class JobsController extends Controller
{
    //

    public function index()
    {
         return view('screens.job-posting');
    }

    //save job
    public function store(Request $request)
    {
        try
        {
           $jobsModel= new Jobs();
           $jobsModel->job_title=$request->job_title;
           $jobsModel->budget=$request->job_budget;
           $jobsModel->expiry_date=$request->job_expirydate;
           $jobsModel->job_desc=$request->job_desc;
           if(isset($request->cerfity))
           {
             $jobsModel->certify=1;
           }
           else
           {
            $jobsModel->certify=0;
           }
           $jobsModel->user_id=Auth::user()->id;
           $jobsModel->save();
           $jobsid=$jobsModel->id;
           for($i=0;$i<count($request->from_language);$i++)
           {
             $JobsPairLanguages = new JobsPairLanguages();
             $JobsPairLanguages->from_lang=$request->from_language[$i];
             $JobsPairLanguages->to_lang=$request->to_language[$i];
             $JobsPairLanguages->jobs_id=$jobsid;
             $JobsPairLanguages->save();
           }

           toastr()->success('Jobs Saved Successfully!');
           return back();
       }
       catch (\Exception $exception)
        {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
