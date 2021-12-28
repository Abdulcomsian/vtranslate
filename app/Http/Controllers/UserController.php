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
use App\Models\UserMotherLanguages;
use App\Models\UserServicesRates;
use App\Models\Jobs;
use App\Models\JobProposal;
use App\Models\WorkHistory;
use App\Models\Resume;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;
use DB;

class UserController extends Controller
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
        return view('home');
    }


    //user profile 
    public function profile()
    {
        $countries = Country::get();
        $userData = User::with('resumee', 'usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('id', Auth::user()->id)->get();
        return view('screens.profile', compact('countries', 'userData'));
    }

    //user chagne status translater or employer
    // public function change_status(Request $request)
    // {
    //     try {
    //         $user_id = Auth::user()->id;
    //         $user_data = User::find($user_id)->update([
    //             'user_status' => $request->user_status,
    //         ]);
    //         toastr()->success('User Status Changed Successfull!');
    //         return \Redirect::route('profile')->with('currtab', $request->currtab);
    //     } catch (\Exception $exception) {
    //         toastr()->error('Something went wrong, try again');
    //         return back()->with('currtab', $request->currtab);
    //     }
    // }

    //save general info of user
    public function save_general_info(Request $request)
    {

        $input = $request->except('_token', 'currtab', 'private_information', 'disallow_indexing', 'display_contact_info', 'news_notification', 'jobsnotification', 'show_rated_users', 'fname', 'lname', 'email', 'zipcode', 'country_id');
        try {
            $record = UserGeneralInformation::where('user_id', Auth::user()->id)->first();
            $input['user_id'] = Auth::user()->id;
            if (!$record) {
                UserGeneralInformation::create($input);
            } else {
                UserGeneralInformation::where('user_id', Auth::user()->id)->update($input);
            }

            //update record in user table
            $mark_profile_section = Auth::user()->mark_profile_section;
            if ($mark_profile_section) {
                if (!in_array(1, $mark_profile_section)) {
                    array_push($mark_profile_section, 1);
                }
            } else {
                $mark_profile_section = array();
                array_push($mark_profile_section, 1);
            }
            $userdata = User::find(Auth::user()->id)->update([
                'private_information' => isset($request->private_information) ? 1 : 0,
                'disallow_indexing'  => isset($request->disallow_indexing) ? 1 : 0,
                'display_contact_info'  => isset($request->display_contact_info) ? 1 : 0,
                'news_notification'  => isset($request->news_notification) ? 1 : 0,
                'jobsnotification'  => isset($request->jobsnotification) ? 1 : 0,
                'show_rated_users'  => isset($request->show_rated_users) ? 1 : 0,
                'fname'  => $request->fname,
                'lname'  => $request->lname,
                'email'  => $request->email,
                'zipcode'  => $request->zipcode ?? '',
                'country_id'  => $request->country_id,
                'mark_profile_section' => $mark_profile_section,
            ]);
            //toaster message
            toastr()->success('User Gneral Info Saved Successfull!');
            if (Auth::user()->user_status == "Employer") {
                return \Redirect::route('profile')->with('currtab', $request->currtab);
            } else {
                return \Redirect::route('profile')->with('currtab', 'resume');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }
    //upload resume
    // public function upload_resume(Request $request)
    // {
    //     try {

    //         if ($file = $request->file('resume')) {
    //             $path = 'files/resume/';
    //             if (!file_exists(public_path() . '/' . $path)) {
    //                 $path = 'files/resume/';
    //                 File::makeDirectory(public_path() . '/' . $path, 0777, true);
    //             }
    //             if (Auth::user()->resume) //if already resume unlink resume and upload new one
    //             {
    //                 unlink(public_path() . '/files/resume/' . Auth::user()->resume);
    //             }
    //             $name = time() . $file->getClientOriginalName();
    //             $file->move('files/resume/', $name);
    //             //progress bar
    //             $mark_profile_section = Auth::user()->mark_profile_section;
    //             if ($mark_profile_section) {
    //                 if (!in_array(2, $mark_profile_section)) {
    //                     array_push($mark_profile_section, 2);
    //                 }
    //             } else {
    //                 $mark_profile_section = array();
    //                 array_push($mark_profile_section, 2);
    //             }
    //             $userModel = User::find(Auth::user()->id);
    //             $userModel->resume = $name;
    //             $userModel->mark_profile_section = $mark_profile_section;
    //             $userModel->save();
    //             //toaster message
    //             toastr()->success('User Resume Saved Successfull!');
    //             return \Redirect::route('profile')->with('currtab', 'languages');
    //         }
    //     } catch (\Exception $exception) {
    //         toastr()->error('Something went wrong, try again');
    //         return back()->with('currtab', $request->currtab);
    //     }
    // }

    //upload resume
    public function upload_resume(Request $request)
    {
        try {
            if ($file = $request->file('images')) {
                $allowedfileExtension = ['pdf', 'docx', 'jpg', 'jpeg'];
                $files = $request->file('images');
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtension);

                    if ($check) {
                        $path = 'files/resume/';
                        if (!file_exists(public_path() . '/' . $path)) {
                            $path = 'files/resume/';
                            File::makeDirectory(public_path() . '/' . $path, 0777, true);
                        }
                        $name = time() . $file->getClientOriginalName();
                        $file->move('files/resume/', $name);

                        $userModel = User::find(Auth::user()->id);
                        $user_id = $userModel->id;
                        $resumeModel = new resume();

                        $resumeModel->file =  $name;
                        $resumeModel->user_id = $user_id;

                        $resumeModel->save();
                    } else {
                        toastr()->error('Selected Files not supported');
                        return back();
                    }
                }

                //progress bar
                $mark_profile_section = Auth::user()->mark_profile_section;
                if ($mark_profile_section) {
                    if (!in_array(2, $mark_profile_section)) {
                        array_push($mark_profile_section, 2);
                    }
                } else {
                    $mark_profile_section = array();
                    array_push($mark_profile_section, 2);
                }
                $userModel->resume = $name;
                $userModel->mark_profile_section = $mark_profile_section;
                $userModel->save();
                // toaster message
                toastr()->success('User Resume Saved Successfully!');
                return \Redirect::route('profile')->with('currtab', 'languages');
            } else {
                toastr()->error('Please Select Resume');
                return back()->with('currtab', $request->currtab);
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save languages
    public function user_save_languages(Request $request)
    {
        try {
            $UserLanguages = new UserLanguages();
            $UserLanguages->from_languages = $request->from_languages;
            $UserLanguages->to_languages = $request->to_languages;
            $UserLanguages->user_id = Auth::user()->id;
            $UserLanguages->save();
            //profile progress
            $mark_profile_section = Auth::user()->mark_profile_section;
            if ($mark_profile_section) {
                if (!in_array(3, $mark_profile_section)) {
                    array_push($mark_profile_section, 3);
                }
            } else {
                $mark_profile_section = array();
                array_push($mark_profile_section, 3);
            }
            User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
            toastr()->success('User Language Saved Successfull!');
            return \Redirect::route('profile')->with('currtab', $request->currtab);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }
    //save mother languages
    public function user_mother_languages(Request $request)
    {
        try {
            $MotherLanguages = new UserMotherLanguages();
            $MotherLanguages->mother_language = $request->mother_language;
            $MotherLanguages->user_id = Auth::user()->id;
            $MotherLanguages->save();
            //profile progress
            $mark_profile_section = Auth::user()->mark_profile_section;
            if ($mark_profile_section) {
                if (!in_array(4, $mark_profile_section)) {
                    array_push($mark_profile_section, 4);
                }
            } else {
                $mark_profile_section = array();
                array_push($mark_profile_section, 4);
            }
            User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
            toastr()->success('User Mother Language Saved Successfull!');
            return \Redirect::route('profile')->with('currtab', $request->currtab);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save user services rates
    public function save_services_rates(Request $request)
    {
        try {
            $UserServicesRates = new UserServicesRates();
            $UserServicesRates->service = $request->service;
            $UserServicesRates->pair_language = $request->pair_language;
            $UserServicesRates->min_rate_per_word = $request->min_rate_per_word;
            $UserServicesRates->min_rate_per_minute = $request->min_rate_per_minute;
            $UserServicesRates->user_id = Auth::user()->id;
            $UserServicesRates->save();
            //profile progress
            $mark_profile_section = Auth::user()->mark_profile_section;
            if ($mark_profile_section) {
                if (!in_array(5, $mark_profile_section)) {
                    array_push($mark_profile_section, 5);
                }
            } else {
                $mark_profile_section = array();
                array_push($mark_profile_section, 5);
            }
            User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
            toastr()->success('User Services Saved Successfull!');
            return \Redirect::route('profile')->with('currtab', 'voiceover');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save voice over languages
    public function save_voice_over(Request $request)
    {
        try {
            //check if language alreayd exist
            $exist = UserVoiceOver::where('language', $request->language)->where('user_id', Auth::user()->id)->first();
            if (!$exist) {
                $name = "";
                if ($request->file('voice')) {
                    $file = $request->file('voice');
                    $path = 'files/voice/';
                    if (!file_exists(public_path() . '/' . $path)) {
                        $path = 'files/voice/';
                        File::makeDirectory(public_path() . '/' . $path, 0777, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    $file->move('files/voice/', $name);
                }
                $UserVoiceOver = new UserVoiceOver();
                $UserVoiceOver->language = $request->language;
                $UserVoiceOver->voice = $name;
                $UserVoiceOver->user_id = Auth::user()->id;
                $UserVoiceOver->save();
                //profile progress
                $mark_profile_section = Auth::user()->mark_profile_section;
                if ($mark_profile_section) {
                    if (!in_array(6, $mark_profile_section)) {
                        array_push($mark_profile_section, 6);
                    }
                } else {
                    $mark_profile_section = array();
                    array_push($mark_profile_section, 6);
                }
                User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
                toastr()->success('User VoiceOver Language Saved Successfull!');
            } else {
                toastr()->error('User VoiceOver Language Already Added');
            }
            return \Redirect::route('profile')->with('currtab', 'specialization');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save specializtions
    public function save_specializations(Request $request)
    {
        try {
            //if record exist then delete
            $record = UserSpecializations::where('user_id', Auth::user()->id)->first();
            if ($record) {
                UserSpecializations::where('user_id', Auth::user()->id)->update([
                    'spicializations' => $request->spicializations,
                ]);
            } else {
                $UserSpecializations = new UserSpecializations();
                $UserSpecializations->spicializations = $request->spicializations;
                $UserSpecializations->user_id = Auth::user()->id;
                $UserSpecializations->save();
                //profile progress
                $mark_profile_section = Auth::user()->mark_profile_section;
                if ($mark_profile_section) {
                    if (!in_array(7, $mark_profile_section)) {
                        array_push($mark_profile_section, 7);
                    }
                } else {
                    $mark_profile_section = array();
                    array_push($mark_profile_section, 7);
                }
                User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
            }
            toastr()->success('User specializtions Saved Successfull!');
            return \Redirect::route('profile')->with('currtab', 'softwares');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save software tools
    public function save_software_tools(Request $request)
    {
        try {
            $record = UserSoftware::where('user_id', Auth::user()->id)->first();
            if ($record) {
                UserSoftware::where('user_id', Auth::user()->id)->update([
                    'software_tools' => $request->softwares,
                    'other_tools' => $request->other_tools,
                ]);
            } else {
                $UserSoftware = new UserSoftware();
                $UserSoftware->software_tools = $request->softwares;
                $UserSoftware->other_tools = $request->other_tools;
                $UserSoftware->user_id = Auth::user()->id;
                $UserSoftware->save();
                //profile progress
                $mark_profile_section = Auth::user()->mark_profile_section;
                if ($mark_profile_section) {
                    if (!in_array(8, $mark_profile_section)) {
                        array_push($mark_profile_section, 8);
                    }
                } else {
                    $mark_profile_section = array();
                    array_push($mark_profile_section, 8);
                }
                User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
            }
            toastr()->success('User Softwares Saved Successfull!');
            return \Redirect::route('profile');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', $request->currtab);
        }
    }

    //save user files
    // public function user_save_files(Request $request)
    // {
    //     try {
    //         if ($file = $request->file('file')) {
    //             $path = 'files/userfiles/';
    //             if (!file_exists(public_path() . '/' . $path)) {
    //                 $path = 'files/userfiles/';
    //                 File::makeDirectory(public_path() . '/' . $path, 0777, true);
    //             }
    //             $name = time() . $file->getClientOriginalName();
    //             $size = $file->getSize();
    //             $file->move('files/userfiles/', $name);
    //         }
    //         $UserFiles = new UserFiles();
    //         $UserFiles->file_title = $request->file_title;
    //         $UserFiles->file = $name;
    //         $UserFiles->file_size = $size;
    //         $UserFiles->purpose = $request->purpose;
    //         $UserFiles->language = $request->language;
    //         $UserFiles->comments = $request->comments;
    //         $UserFiles->user_id = Auth::user()->id;
    //         $UserFiles->save();
    //         //profile progress
    //         $mark_profile_section = Auth::user()->mark_profile_section;
    //         if ($mark_profile_section) {
    //             if (!in_array(9, $mark_profile_section)) {
    //                 array_push($mark_profile_section, 9);
    //             }
    //         } else {
    //             $mark_profile_section = array();
    //             array_push($mark_profile_section, 9);
    //         }
    //         User::find(Auth::user()->id)->update(['mark_profile_section' => $mark_profile_section]);
    //         toastr()->success('User Files Saved Successfully!!');
    //         return \Redirect::route('profile');
    //     } catch (\Exception $exception) {
    //         toastr()->error('Something went wrong, try again');
    //         return back();
    //     }
    // }

    //delete user language
    public function delete_user_languages(Request $request)
    {
        try {
            UserLanguages::find($request->id)->delete();
            toastr()->success('User Language Deleted Successfull!');
            return \Redirect::route('profile')->with('currtab', 'languages');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', 'languages');
        }
    }
    //delte mother langugaes
    public function delete_mother_languages(Request $request)
    {
        try {
            UserMotherLanguages::find($request->id)->delete();
            toastr()->success('Mother Language Deleted Successfull!');
            return \Redirect::route('profile')->with('currtab', 'languages');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', 'languages');
        }
    }
    //delete voiceover language
    public function delete_voiceover_language(Request $request)
    {
        try {
            $voicedata = UserVoiceOver::find($request->id);
            UserVoiceOver::find($request->id)->delete();
            if ($voicedata->voice) //if already resume unlink resume and upload new one
            {
                unlink(public_path() . '/files/vlice/' .  $voicedata->voice);
            }
            toastr()->success('VoiceOver Language Deleted Successfull!');
            return \Redirect::route('profile')->with('currtab', 'voiceover');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back()->with('currtab', 'voiceover');
        }
    }
    //delete user files
    public function delete_user_files(Request $request)
    {

        try {
            foreach ($request->user_files as $key => $file) {
                UserFiles::find($file)->delete();
            }
            toastr()->success('Files  Deleted Successfull!');
            return \Redirect::route('profile');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //delete service rates
    public function delete_service_rates(Request $request)
    {
        try {
            UserServicesRates::find($request->id)->delete();
            toastr()->success('Service  Deleted Successfull!');
            return \Redirect::route('profile')->with('currtab', 'service_rates');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function chagne_profile_photo(Request $request)
    {
        try {
            if ($file = $request->file('profilephoto')) {
                $path = 'profile-images/';
                if (!file_exists(public_path() . '/' . $path)) {
                    $path = 'profile-images/';
                    File::makeDirectory(public_path() . '/' . $path, 0777, true);
                }
                if (Auth::user()->profile_photo) //if already resume unlink resume and upload new one
                {
                    unlink(public_path() . '/profile-images/' . Auth::user()->profile_photo);
                }
                $name = time() . $file->getClientOriginalName();
                $size = $file->getSize();
                $file->move('profile-images/', $name);
            }

            User::find(Auth::user()->id)->update([
                'profile_photo' => $name,
            ]);
            toastr()->success('Profile Photo Changed Successfully');
            return \Redirect::route('profile');
        } catch (\Exception $exception) {
            toastr()->error('Please Upload your image first');
            return back();
        }
    }

    //view user profile
    public function view_user_profile()
    {
        try {
            $workHistory = WorkHistory::where('user_id', Auth::user()->id)->get();
            if (Auth::user()->user_status == 'Freelancer') {
                $userData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('id', Auth::user()->id)->get();
                $jobapplied = JobProposal::where('user_id', Auth::user()->id)->count();
                return view('screens.freelancer.freelancer', compact('userData', 'jobapplied', 'workHistory'));
            } else {
                $userData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('id', Auth::user()->id)->get();
                $jobposted = Jobs::where('user_id', Auth::user()->id)->count();
                return view('screens.agencies.agency', compact('userData', 'jobposted', 'workHistory'));
            }
        } catch (\Exception $exception) {
            toastr()->error('something went wrong');
            return back();
        }
    }

    //use public profile sprofile
    public function public_profile($id)
    {
        try {
            $workHistory = WorkHistory::where('user_id', $id)->get();
            $userData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('id', $id)->get();
            $jobapplied = JobProposal::where('user_id', $id)->count();
            $checkuser = User::find($id);
            if ($userData[0]->private_information) {
                if ($checkuser->user_status == 'Freelancer') {
                    return view('screens.freelancer.freelancer', compact('userData', 'jobapplied', 'workHistory'));
                } else {
                    return view('screens.agencies.agency', compact('userData', 'jobapplied', 'workHistory'));
                }
            } else {
                toastr()->error('Profile is Private!');
                return redirect('/home');
            }
        } catch (\Exception $exception) {
            toastr()->error('something went wrong');
            return back();
        }
    }

    //change user status
    public function change_user_status(Request $request)
    {
        try {
            $type = $request->type;
            if ($type == "profile") {
                $result = User::find(Auth::user()->id)->update(['private_information' => $request->status]);
            } elseif ($type == "availability") {
                $result = User::find(Auth::user()->id)->update(['status' => $request->status]);
            } elseif ($type == "ContactInfo") {
                $result = User::find(Auth::user()->id)->update(['display_contact_info' => $request->status]);
            } elseif ($type == "Rates") {
                $result = User::find(Auth::user()->id)->update(['show_rated_users' => $request->status]);
            } elseif ($type == "JobNotification") {
                $result = User::find(Auth::user()->id)->update(['jobsnotification' => $request->status]);
            } elseif ($type == "NewsNotification") {
                $result = User::find(Auth::user()->id)->update(['news_notification' => $request->status]);
            } elseif ($type == "ForumsNotification") {
                $result = 1;
            }
            if ($result) {
                echo "success";
            } else {
                echo "error";
            }
        } catch (\Exception $exception) {
            echo "error";
        }
    }

    //change password
    public function change_pass(Request $request)
    {
        try {
            $countries = Country::get();
            $userData = User::with('usergeneralinfo', 'userlanguages', 'usersoftwares', 'userspicialize', 'uservoicover', 'userfiles', 'usermotherlanguages', 'usersevices')->where('id', Auth::user()->id)->get();
            $request->session()->flash('currtab', 'changepass');
            return view('screens.profile', compact('countries', 'userData'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong');
            return back();
        }
    }
    //update password
    public function update_pass(Request $request)
    {

        $this->validate($request, [
            'old_password' => ['required', 'string'],
            'new_password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'confirm_password' => 'required|same:new_pass'
        ]);
        try {
            $userdata = User::find(Auth::user()->id);
            if (Hash::check($request->old_password, $userdata->password)) {
                $userdata->password = Hash::make($request->new_password);
                $userdata->save();
                toastr()->error('Password Change Successfully');
            } else {
                toastr()->error('Your old password is incorrect');
            }
            return back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong');
            return back();
        }
    }
    //delete profile
    public function delete_profile(Request $request)
    {
        try {
            $res = User::find(Auth::user()->id)->delete();
            if ($res) {
                Auth::logout();
                return redirect('/login');
            } else {
                toastr()->error('Profile not Deleted');
                return back();
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong');
            return back();
        }
    }
    //get states
    public function get_states(Request $request)
    {
        $type = $request->type;
        if ($type == "state") {
            $countryid = $request->id;
            $states = States::where('country_id', $countryid)->get();
            $list = '<option value="">Select State</option>';
            foreach ($states as $state) {
                $list .= '<option value="' . $state->name . '" data-id="' . $state->id . '">' . $state->name . '</option>';
            }
        } elseif ($type == "city") {
            $stateid = $request->id;
            $states = Cities::where('state_id', $stateid)->get();
            $list = '<option value="">Select City</option>';
            foreach ($states as $state) {
                $list .= '<option value="' . $state->name . '" data-id="' . $state->id . '">' . $state->name . '</option>';
            }
        }
        echo $list;
    }
}
