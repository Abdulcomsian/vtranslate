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

class FreelancerController extends Controller
{
    //

    public function index()
    {
        
        $FreelancerData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Translator')->get();
         return view('screens.freelancer.top-freelancer',compact('FreelancerData'));
    }

    //search Freelancer
    public function search_freelancer()
    {
         $FreelancerData=User::with('usergeneralinfo','userlanguages','usersoftwares','userspicialize','uservoicover','userfiles','usermotherlanguages','usersevices')->where('user_status','Translator')->get();
         return view('screens.freelancer.search-freelancer',compact('FreelancerData'));
    }
}
