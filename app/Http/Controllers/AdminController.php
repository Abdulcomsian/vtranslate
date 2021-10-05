<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $Users = User::get();
        return view('admin.screens.dashboard', compact('Users'));
    }
    //delete freelancer and employer
    public function delete_user(Request $request)
    {
        try {
            if (isset($request->freelancerid)) {
                User::find($request->freelancerid)->delete();
            } else {
                User::find($request->agencyid)->delete();
            }
            toastr()->success('User Delete Successfully!!');
            return back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //all jobs
    public function jobs()
    {
        $jobs = Jobs::with('user')->get();
        return view('admin.screens.jobs', compact('jobs'));
    }
    //delete job
    public function delete_job(Request $request)
    {
        try {
            Jobs::find($request->jobid)->delete();
            toastr()->success('Job Delete Successfully!!');
            return back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //change status
    public function job_status(Request $request)
    {
        try {
            Jobs::find($request->jobstatusid)->update([
                'status' => 1
            ]);
            toastr()->success('Job status changed successfully');
            return back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
