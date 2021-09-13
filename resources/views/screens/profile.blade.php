@extends('layouts.master' ,['page_title' => 'Profile'])
@section('content')
<section id="profileBanner">
        <div class="text-center">
            <h3>Complete Profile</h3>
        </div>
    </section>
    <section id="profileDiv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabDiv">
                        <!-- active inactive cuttent tab -->
                        @php
                            $factive='';
                            $statusactive='';
                            $generaltab='';
                            $resumetab='';
                            $languages='';
                            $voiceover='';
                            $softwarestab='';
                            $specializationtab='';
                            if(session()->get('currtab')=='status'){
                             $statusactive='active';
                            }
                            elseif(session()->get('currtab')=='generaltab'){
                             $generaltab='active';
                            }
                            elseif(session()->get('currtab')=='resume')
                            {
                               $resumetab='active';
                            }
                            elseif(session()->get('currtab')=='languages')
                            {
                                $languages='active';
                            }
                            elseif(session()->get('currtab')=='voiceover')
                            {
                                $voiceover='active';
                            }
                            elseif(session()->get('currtab')=='specialization')
                            {
                                $specializationtab='active';
                            }
                            elseif(session()->get('currtab')=='softwares')
                            {
                                $softwarestab='active';
                            }
                            else
                            {
                                $factive='active';
                            }
                        @endphp
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                               <a class="nav-link {{$factive}}" data-toggle="pill" href="#profile"><span>My Profile</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#status" class="nav-link {{$statusactive}}" data-toggle="pill"><span>Status</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#general" class="nav-link {{$generaltab}}" data-toggle="pill"><span>General</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#resume" class="nav-link {{$resumetab}}" data-toggle="pill"><span>Resume</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#self-promotion"><span>Self Promotion</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#agency" class="nav-link" data-toggle="pill"><span>Agency</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#language" class="nav-link {{$languages}}" data-toggle="pill"><span>Languages</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#service" class="nav-link" data-toggle="pill"><span>Services & Rates</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#voice-Over" class="nav-link {{$voiceover}}" data-toggle="pill"><span>Voice-Over</span> </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link {{$specializationtab}}" data-toggle="pill" href="#specialization"><span>Specialization</span> </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#software" class="nav-link {{$softwarestab}}" data-toggle="pill"><span>Software</span> </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#files" class="nav-link" data-toggle="pill"><span>Files</span> </a>
                              </li>
                         </ul>
                    </div>
                </div>
            </div>
            <div class="actionDiv">
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li>VT Forums Settings </li>
                            <li>VT Teams Settings </li>
                            <li>Change Email</li>
                            <li>Change Password</li>
                            <li class="noAfter">Delete Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="profile" class="container tab-pane {{$factive}}">
                    <div class="commonDiv">
                        <h3>My Profile</h3>
                        <div class="text-center">
                            <p class="mainHeading">Profile Management</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <button>Editing Wizard</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Submit Photo</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Delete Photo</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Add Agency</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Editing Wizard</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Submit Photo</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Delete Photo</button>
                            </div>
                            <div class="col-lg-3">
                                <button>Add Agency</button>
                            </div>
                        </div>
                        <div class="box" style="margin-top:20px">
                            <p>Use the <b>Profile Editing Menu</b> above to edit you profile and preference</p>
                            <p>You are logged on and therefore you can see on your profile page alla availabel Information
                                including your cover letter, full address, rates and the profile editing menu. Click
                                or tap question marks <b>?</b> to get context sensitive help.
                            </p>
                        </div>
                        <div class="box" style="margin-top:20px">
                            <p><b>Link to your profile page:</b> <a href="">areeb1.TanslatorsCafe.com</a> (you may use it, for example
                            on your business card; please note that it must be without <b>"www"</b>)</p>
                            <p><b>TC membership:</b> Regular from Thrusday, August 26, 2021, <b>Upgrade now! | Payment History and Invoices</b>
                            </p>
                        </div>
                        <div class="text-center" style="margin-top:20px">
                            <p class="mainHeading">Availability</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <input type="radio" id="css" name="fav_language" value="CSS">
                                <p>Available</p>
                                <button>Disable</button>
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex multipleItem">
                                    <button>Change to Buy</button>
                                    <label for=""><b>Until</b></label>
                                    <select name="" id="">
                                        <option value="">Aug</option>
                                    </select>
                                    <select name="" id="">
                                        <option value="">26</option>
                                    </select>
                                    <select name="" id="">
                                        <option value="">2021</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p>Translator's Availability is displayed <a href="">at the top right corner of your profile page.</a>
                            Busy members are shown at the end of the search results.
                        </p>
                        <p>Click or tap the <b>Disable</b> button to hide your availability status.</p>
                        <p>You can use the following link to place your current busy status into another Website: <a href="">img src="https://www.translatorscafe.com/cafe/misc/GetBusy.asp?ID=449990"</a> </p>
                        <div class="text-center" style="margin-top:20px">
                            <p class="mainHeading">Availability</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <h4><b>Profile</b></h4>
                                    <p>Public</p>
                                    <button>Make Private</button>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <h4><b>Contact Info</b></h4>
                                    <p>Invisible</p>
                                    <button>Make Visible</button>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <h4><b>Rates</b></h4>
                                    <p>No rates</p>
                                    <button>Make Visible</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <p><b>TCTerms Q & A</b></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <p><b>Your Ignore List</b></p>
                                    <p><b>TC Forums</b></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center privacy-box">
                                    <p><b>TC Messaging System</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="margin-top:20px">
                            <p class="mainHeading">Email Notification</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="text-center privacy-box">
                                    <h4><b>Job Notification</b></h4>
                                    <p>Diabaled</p>
                                    <button>Enable</button>
                                    <p><b>Block Countries</b></p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-center privacy-box">
                                    <h4><b>News Notification</b></h4>
                                    <p>Diabaled</p>
                                    <button>Enable</button>
                                </div>
                            </div>
                            <div
                             class="col-lg-3">
                                <div class="text-center privacy-box">
                                    <h4><b>Forums Notification</b></h4>
                                    <p>Diabaled</p>
                                    <button>Subcribe</button>
                                </div>
                            </div>
                            <div
                             class="col-lg-3">
                                <div class="text-center privacy-box">
                                    <h4><b>TCTTerms Notification</b></h4>
                                    <p>Enable</p>
                                    <button>Diabaled</button>
                                </div>
                            </div>
                        </div>
                        <div class="userInfo">
                            <div class="row" style="margin-bottom:20px">
                                <div class="col-lg-3">
                                    <div class="important-note">
                                        <p>If you want your profile to be
                                            more exposed, consider submitting your photograph
                                            or logo. The site statistics show that profiles with photos are viewed 6.1 times more
                                            frequently (profiles with a photograph in average 1472 times, without a photograph
                                            only 241 times). 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <h4>Areeb middle name Hassan</h4>
                                    <p>Advertising slogan</p>
                                    <p>Company text field</p>
                                    <p><b>Pakistan</b></p>
                                    <p>Mother Tongues:</p>
                                    <p>Abkhazian, Albanian</p>
                                    <p>Time zone: not defined. Change</p>
                                </div>
                            </div>
                            <a href=""><b>https://www.accrualgroup.com</b></a>
                        </div>
                        <p><b>TCTerms Score 0</b> [disable]</p>
                        <p><b>Activity statistics of Areeb Hassan</b></p>
                        <table class="activityStatusTable table-responsive"> 
                            <thead>
                                <tr>
                                    <th>Services and Rates</th>
                                    <th>Subject Areas</th>
                                    <th>Voice</th>
                                    <th>Soft & Platform</th>
                                    <th>Accreditations</th>
                                    <th>Membership</th>
                                    <th>Credentials</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Contact Information (invisible)</p>
                        </div>
                        <p><b>Address:</b> House no 1182, Mangla road, G-9/4, Islamabad, Punjab 44000, Pakistan</p>
                        <p><b>Phone:</b> 03245040502, <b>Fax:</b> fax number field, <b>Cell Phone:</b> 03245040502</p>
                        <p>Joined: Thursday, August 26, 2021, last update Thursday, August 26, 2021 </p>
                        <p><b>Preferred E-mail of Areeb Hassan: send a message</b></p>
                        <p><b>Send a Private Message</b></p>
                        <p><b>Facebook</b></p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Working Language Pairs</p>
                        </div>
                        <p>Aymara >> Basque, Basque » Brazilian Portuguese</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Services and Rates</p>
                        </div>
                        <p>Rates are Invisible</p>
                        <p>Other, Subtitling</p>
                        <p>Preferred currency: <b>PKR</b></p>
                        <p>Enter your rates and you will be able to click or tap the <b>Translation Rates Statistics</b> button below) to view the information that is valuable to any freelance translator (if there is enough information in the database to get the correct statistical results). You can also click or tap the <b>Enter Rates</b> button in the Control Panel above to enter your translation rates. </p>
                        <button style="width:auto">Edit My Rates</button>
                        <button style="width:auto">Translation Rates Statistics </button>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Subject Areas</p>
                        </div>
                        <p>Acting and Directing, Advertising, Aerospace Engineering, Agriculture, Agronomy and Crop Science, Aircraft, Chemical Technology and Related Industries, Chemistry, Child Care, Civil Engineering, Ecology, Economics, Education, Electrical Engineering, Engineering, Entomology, Manufacturing (Metal Working and Products, Instruments, Furniture, Printing, Clothing, etc.), Marine and Aquatic Biology, Mathematics, Mechanical Engineering, Medicine – Acupuncture and Oriental Medicine, Medicine – Dentistry, Medicine - Ophthalmology, Medicine – Public Health Education and Promotion, Medicine – Social Psychology, Medicine – Toxicology, Medicine (General), Medieval and Renaissance Studies, Metallurgical Engineering, Sport and 
                            Fitness, Transportation, Veterinary, Visual and Performing Arts, Women Studies</p>
                            <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Voice-Over</p>
                        </div>
                        <p><b>Voice Languages:</b> Abkhazian, Urdu</p>
                        <p><b>Voice Gender: </b>Female Voice</p>
                        <p><b>Voice Ages:</b> Young Adult, Middle Age Adult</p>
                        <p><b>Type of Recording: </b>Audio Books, Character Voices, Commercials, Documentaries, e-Learning, Imaging, Infomercials, Interactive Voice Response Telecom Applications (IVR), Narration, On
                            Camera Recordings, Political, Promos</p>
                        <div class="text-center">
                            <p>
                                <b>Detailed Description and Voice Samples</b>
                            </p>
                        </div>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Cover Letter (not visible for everybody)</p>
                        </div>
                        <p>cover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover lettercover letter</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Background (Your Presentation Page, Résumé or CV)</p>
                        </div> 
                        <div class="box" style="display: flex;justify-content: space-between;">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <p><b>CV (42KB)</b></p>
                        </div>  
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Software</p>
                        </div> 
                        <ul style="padding-left:30px; list-style:disc;">
                            <li>Adobe Acrobat</li>
                            <li>Adobe Captivate</li>
                            <li>Adobe Photoshop</li>
                            <li>AutoCAD</li>
                            <li>Déjà Vu</li>
                            <li>JCAT</li>
                            <li>Memo</li>
                            <li>Meta Texis</li>
                            <li>MultiCorpora</li>
                            <li>Open Language Tools</li>
                            <li>PageMaker</li>
                        </ul>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Platform & hardware</p>
                        </div> 
                        <p>platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware platform and hardware</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Membership</p>
                        </div>
                        <p>Membership in professional associations Membership in professional associationsMembership in professional associations Membership in professional associations Membership in professional associations Membership in professional associations Membership in professional associations Membership in professional associations</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Verified Credentials</p>
                        </div>
                        <p>No data</p>
                        <p>Report your credentials</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Translators and Agencies Rated by Areeb Hassan</p>
                        </div>
                        <p>None</p>
                        <div class="text-left" style="margin-top:20px">
                            <p class="mainHeading">Payment Options</p>
                        </div>
                        <p>If you accept payments through several payment processors, their logos can be shown on your profile page. If your clients click or tap a payment processor logo on your profile, they will be redirected to the site of this payment processor. If you want to show payment processors through which you accept payments on your profile page (in this place), click or tap the Edit button above and enter your email addresses for corresponding payment processors in the form.
If you are not registered with any of the payment processors below, please click or tap the corresponding button below and sign up for PayPal or Skrill. After that you will enter your e-mail address on the profile form.</p>
                    </div>
                </div>
               <div id="status" class="container tab-pane {{$statusactive}}">
                    <div class="commonDiv">
                        <h3>Select Status</h3>
                        <span>User Name: <b>{{auth::user()->username}}</b></span>
                        <span>Current Status: <b>{{auth::user()->user_status}}</b></span>
                        <form action="{{route('user-change-status')}}" method="post">
                            @csrf
                            <p>Please select your status:</p>
                            <fieldset>
                                <div class="radioBtnDiv">
                                    <input type="radio" value="Translator" name="user_status" required="required" @if(auth::user()->user_status=='Translator'){{'checked'}}@endif>
 
                                    <div class="optionInfo">
                                        <h4>Translator</h4>
                                        <p>If you are a freelance translator, interpreter or other language professional and do not own an agency, please select translator.</p>
                                    </div>
                                </div>
                                <div class="radioBtnDiv">
                                    <input type="radio" value="Employer" name="user_status" @if(auth::user()->user_status=='Employer'){{'checked'}}@endif>
                                    <div class="optionInfo">
                                        <h4>Employer</h4>
                                        <p>If yo are looking for a traslator, interpreter then select employer. The supplementary agency information form will be provided later.</p>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" name="currtab" value="status">
                            <button class="commonBtn">Save</button>
                        </form>
                    </div>
                </div>
                <div id="general" class="container tab-pane {{$generaltab}}">   
                    <div id="profile" class="container tab-pane active">
                        <div class="commonDiv">
                            <h3>General</h3>
                            <p class="notice"><b>Important:</b> Please fill in all fields marked with an asterisk (*) before you attempt to send this form. Please use plain text. You can use any language.</p>
                            <p>Please note that the period of waiting for your input is limited on all Web sites. It is set to 30 minutes here. If you are not ready to fill out all fields, then first fill out only the required fields and save the form. After saving, enter your information in other fields or only in one field and save again. You can use this technique for completing any forms on the Internet. Because sometimes your session ends unexpectedly, sometimes errors happen. So to save your time, save often.</p>
                            <h4 class="font-weight-600">General Information</h4>
                            <div class="infoDiv">
                                <span>User Name: <b>{{auth::user()->username}}</b></span>
                                <span>Current Status: <b>{{auth::user()->user_status}}</b></span>
                                <span>
                                    <a href="">Click or tap to change</a>
                                </span>
                            </div>                            
                            <h4 class="font-weight-600">Contact Information</h4>
                            <form action="{{route('user-save-general-info')}}" method="post">
                                @csrf
                                <div class="inputDiv">
                                    <label for="">Title:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="title" id="title" required="required" value="{{ $userData[0]->usergeneralinfo->title ?? '' }}">
                                        <p>Mr., Ms., Dr., etc.</p>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">First Name (Given):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="first_name" id="first_name" required="required" value="{{$userData[0]->usergeneralinfo->first_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Last Name (Family):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="last_name" id="last_name" required="required" value="{{$userData[0]->usergeneralinfo->last_name ?? '' }}">
                                        <p>Please make sure your first, last and middle names begin with a capital letter and do not use all capital letters.  </p>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">E-Mail Address:</label>
                                    <div class="inputSpan">
                                        <input type="email" name="gemail" id="gemail" required="required" value="{{$userData[0]->usergeneralinfo->gemail ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Postal Code (Zip):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="postal_code" id="postal_code" value="{{$userData[0]->usergeneralinfo->postal_code ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Address:</label>
                                    <div class="inputSpan">
                                        <textarea name="address" id="address" cols="30" rows="4" required="required">{{$userData[0]->usergeneralinfo->address ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">City:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="city" id="city" required="required" value="{{$userData[0]->usergeneralinfo->city ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">State/Region:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="state" id="state" required="required" value="{{$userData[0]->usergeneralinfo->state ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Country:</label>
                                    <div class="inputSpan">
                                        <select name="country" id="country" required="required">
                                            <option value="">Select Country</option>
                                            @foreach( $countries as $country)
                                                @php
                                                 $selected='';
                                                 if(isset($userData[0]->usergeneralinfo->country) && $userData[0]->usergeneralinfo->country == $country->id)
                                                 {
                                                    $selected='selected';
                                                 }
                                                @endphp
                                                <option value="{{$country->id}}" {{$selected}}>{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Telephone:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="telephone" id="telephone" value="{{$userData[0]->usergeneralinfo->telephone ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Fax:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="fax" id="fax" value="{{$userData[0]->usergeneralinfo->fax ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Mobile Phone:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="mobile_phone" id="mobile_phone" required="required" value="{{$userData[0]->usergeneralinfo->mobile_phone ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Second Email:</label>
                                    <div class="inputSpan">
                                        <input type="email" name="second_email" id="second_email" value="{{$userData[0]->usergeneralinfo->second_email ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Website:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="website" id="website" value="{{$userData[0]->usergeneralinfo->website ?? '' }}">
                                        <p>Please enter only one URL and check how it works after submitting. Please do not use this field for links to your profile in other directories — such links will not be shown.</p>
                                    </div>
                                </div>
                                <!-- <div class="inputDiv">
                                    <label for="">My Profile in social networks and other services </label>
                                    <div class="inputSpan">
                                        <p class="notice">
                                            Expand your contacts by adding links to your profiles in other social networks like Facebook or services like Skype or YouTube channels. Here we call them external profiles.
                                        </p>
                                        <div class="addProfile">
                                            <button><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                                            <span>Add a networking profile</span>
                                        </div>
                                    </div>
                                </div> -->
                                <hr>
                                <div class="inputDiv">
                                    <label for="">Company Name:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="company_name" id="company_name" value="{{$userData[0]->usergeneralinfo->company_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Position:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="position" id="position" value="{{$userData[0]->usergeneralinfo->position ?? '' }}">
                                    </div>
                                </div>
                                <h4 class="font-weight-600">Password Reset Question</h4>
                            <div class="inputDiv">
                                <label for="">Secret Question:</label>
                                <div class="inputSpan">
                                    <input type="text" name="secret_question" id="secret_question" value="{{$userData[0]->usergeneralinfo->secret_question ?? '' }}">
                                </div>
                            </div>
                             <div class="inputDiv">
                                <label for="">Answer To Your 
                                    Secret Question</label>
                                <div class="inputSpan">
                                    <input type="text" name="secret_answer" id="secret_answer" value="{{$userData[0]->usergeneralinfo->secret_answer ?? '' }}">
                                    <p>Please enter a question and a one-word answer that is easy for you to remember (e.g., What is the name of your cat?). If you forget your password, click or tap Forgot Your Password? on the Member Log On screen. You will see this question and may enter your answer. These fields are not required.</p>
                                    <p>Your secret question and answer allow to change your password in case you forget it.
                                        Tip. Choose a question that:</p>
                                        <ul>
                                            <li>Does not have an obvious answer</li>
                                            <li>You can answer easily</li>
                                            <li>Will be difficult for others to guess.</li>
                                        </ul>
                                    <a href="" class="font-weight-600">Change Password</a>
                                </div>
                            </div>
                           <!--  <hr>
                            <h4 class="font-weight-600">Password Reset Question</h4>
                            <div class="inputDiv">
                                <label for="">Payment Processors:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                    <p>If you are registered with one of the payment processors shown above, enter e-mail  addresses of your payment processors and select corresponding Enable check boxes. You will be able to test the payment processor buttons from your profile page later. If you are not registered, please click or tap the PayPal or Skrill buttons above and sign up.</p>
                                    <p class="warningText">Warning: Email addresses you enter in PayPal and Skrill fields above will be exposed on your profile page and you will start receiving spam messages.
                                    </p>
                                    <p>To remove a payment processor logo from your profile, clear the corresponding check 
                                        boxes and click or tap the Save button at the bottom of this page.</p>
                                </div>
                            </div> -->
                            <hr>
                            <div class="inputDiv">
                                <label for="">Specialization 
                                    Keywords:</label>
                                <div class="inputSpan">
                                    <textarea name="special_keywords" id="special_keywords" cols="30" rows="4">{{$userData[0]->usergeneralinfo->special_keywords ?? '' }}</textarea>
                                    <p>Used in addition to the subject areas selected on the Specialization page.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Accreditations:</label>
                                <div class="inputSpan">
                                    <textarea name="accreditations" id="accreditations" cols="30" rows="4">{{$userData[0]->usergeneralinfo->accreditations ?? '' }}</textarea>
                                    <p>For example, accreditation in courts.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Membership in 
                                    professional 
                                    associations:</label>
                                <div class="inputSpan">
                                    <textarea name="membership_professional_associations" id="membership_professional_associations" cols="30" rows="4">
                                        {{$userData[0]->usergeneralinfo->membership_professional_associations ?? '' }}
                                    </textarea>
                                    <p>Only professional translator associations like ATA or ITI.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Platform & hardware:</label>
                                <div class="inputSpan">
                                    <textarea name="platform_hardware" id="platform_hardware" cols="30" rows="4">
                                        {{$userData[0]->usergeneralinfo->platform_hardware ?? '' }}
                                    </textarea>
                                    <p>Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Cover Letter:</label>
                                <div class="inputSpan">
                                    <textarea name="cover_letter" id="cover_letter" cols="30" rows="4">
                                       {{$userData[0]->usergeneralinfo->cover_letter ?? '' }}  
                                    </textarea>
                                    <p>Please use plain text. You may copy text from your word processor and paste it. You will use this cover letter only when sending e-mail to your potential clients. No one except you will be able to see it. Max. 2000 characters, including spaces, any language.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Resume:</label>
                                <div class="inputSpan">
                                   <p>You will submit your résumé or presentation page later using the Edit Résumé button in the Control Panel of your profile or if you select Résumé from the profile menu above.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Advertisong Slogan:</label>
                                <div class="inputSpan">
                                    <textarea name="advertising_slogan" id="advertising_slogan" cols="30" rows="4">
                                        {{$userData[0]->usergeneralinfo->advertising_slogan ?? '' }}
                                    </textarea>
                                    <p>For example, “Reliable, high-quality translation and subtitling”,
                                        Max. 150 characters, including spaces. HTML is not allowed.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="inputDiv">
                                <label for="">Private Information:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        @php
                                         $privatechecked='';
                                         $disallowchecked='';
                                         $displaycontchecked='';
                                         $news_notificationchecked='';
                                         $jobsnotification_checked='';
                                         $show_rated_users_checked='';
                                         if(isset($userData[0]->usergeneralinfo->private_information)==1)
                                         {
                                            $privatechecked='checked';
                                         }
                                         if(isset($userData[0]->usergeneralinfo->disallow_indexing)==1)
                                         {
                                            $disallowchecked='checked';
                                         }
                                         if(isset($userData[0]->usergeneralinfo->display_contact_info)==1)
                                         {
                                            $displaycontchecked='checked';
                                         }
                                         if(isset($userData[0]->usergeneralinfo->news_notification)==1)
                                         {
                                            $news_notificationchecked='checked';
                                         }
                                         if(isset($userData[0]->usergeneralinfo->jobsnotification)==1)
                                         {
                                            $jobsnotification_checked='checked';
                                         }
                                         if(isset($userData[0]->usergeneralinfo->show_rated_users)==1)
                                         {
                                            $show_rated_users_checked='checked';
                                         }
                                        @endphp
                                        <input type="checkbox" name="private_information" id="private_information" {{$privatechecked}}>
                                        <label for="">Make All Your Information Private</label>
                                    </div>
                                    <p>If you select this check box, your profile will not be shown to the site users and search engines. Your name will not appear in the search results. However, your name will always be shown if you decide to post messages in TranslatorsCafe.com forums or ask questions in TCTerms. Another exception is job posting. If you consider posting a job on the Job Board, your profile will be accessible from the Selected Job page to members having a full profile.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Disallow Indexing:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="disallow_indexing" id="disallow_indexing" {{$disallowchecked}}>
                                        <label for="">Disallow search engines to index your profile</label>
                                    </div>
                                    <p>If you select this check box and your profile is public, the meta tag on your profile page will tell search engines not to index this page. Well-behaved search engines will obey, others will not. Therefore, if you want to keep a secret, do not publish it! See Disallow Search Engines to Index Your Profile for more information.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Display Contact Info:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="display_contact_info" id="display_contact_info" {{$displaycontchecked}}>
                                        <label for="">Display your contact information on your Profile Page.                                        </label>
                                    </div>
                                    <p>If you select this check box and your profile is public, the meta tag on your profile page will tell search engines not to index this page. Well-behaved search engines will obey, others will not. Therefore, if you want to keep a secret, do not publish it! See Disallow Search Engines to Index Your Profile for more information.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">News notification:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="news_notification" id="news_notification" {{$news_notificationchecked}}>
                                        <label for="">Can we send you news and updates about Ve Translate.com? 
                                            Please check if Yes.</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Jobs notification:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="jobsnotification" id="jobsnotification" {{$jobsnotification_checked}}>
                                        <label for="">Can we send you new jobs from the Job Board? Please check if Yes.
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Show rated users:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="show_rated_users" id="show_rated_users" {{$show_rated_users_checked}}>
                                        <label for="">Show the list of all outsourcers and service providers rated by you 
                                            on your profile page.
                                            
                                        </label>
                                    </div>
                                </div>
                            </div>  
                            <p>When you have completed filling out this form, please click or tap the Save button. Please note that the recent changes made 
                                in your profile will not appear immediately in the search results</p> 
                             <input type="hidden" name="currtab" value="generaltab">
                            <button type="submit" class="commonBtn">Save</button>     
                            </form>
                        </div>
                    </div>
                </div>
                <div id="resume" class="container tab-pane {{$resumetab}}">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="resumeContent" class="commonDiv">
                                        <h3>Resume</h3>
                                        <p class="warning">Upload Your Resume</p>
                                        <form action="{{route('user-upload-resume')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="control-group">
                                                <div class="controls bootstrap-timepicker">
                                                    <label class="form-label" for="customFile">Upload Your Resume</label>
                                                    <input type="file" name="resume" accept="application/pdf,application/ms-word" class="control " id="customFile" required="required" />
                                                </div>
                                            </div>
                
                                            <div class="multiBtn text-center">
                                                <input type="hidden" name="currtab" value="resume">
                                                <button class="commonBtn">Submit</button>
                                            </div>
                                           
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="self-promotion" class="container tab-pane fade">
                    <section id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Self Promotion</h3>
                                       <p>You may use <b>Self Promotion</b> pages for placing any promotional materials that will be attached to your profile. For example you place <b>TC Master Only</b> here your translation, pieces of poetry and prose. You can also upload files, for example images on your resume in .doc or .zip or .pdf format and provide links to your uploaded files or show them on you personal pages.</p>
                                       <p>The features available <b>Master Membership Only.</b></p>
                                       <a href=""><b>Upgrade to Master Now !</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="agency" class="container tab-pane fade">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Agency</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="language" class="container tab-pane {{$languages}}">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Language</h3>
                                        <p class="warningself">You can select languages from below</p>
                                        <form action="{{route('user-save-languages')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <table>
                                                        <thead>
                                                            <th>Mother languages</th>
                                                        </thead>
                                                        <tbody>
                                                           <td class="text-center ml-5">
                                                            <select id="mother_language" name="mother_language" required="required">
                                                                <option value="">Select Country</option>
                                                                <option value="af">Afrikaans</option>
                                                                <option value="sq">Albanian - shqip</option>
                                                                <option value="am">Amharic - አማርኛ</option>
                                                                <option value="ar">Arabic - العربية</option>
                                                                <option value="an">Aragonese - aragonés</option>
                                                                <option value="hy">Armenian - հայերեն</option>
                                                                <option value="ast">Asturian - asturianu</option>
                                                                <option value="az">Azerbaijani - azərbaycan dili</option>
                                                                <option value="eu">Basque - euskara</option>
                                                                <option value="be">Belarusian - беларуская</option>
                                                                <option value="bn">Bengali - বাংলা</option>
                                                                <option value="bs">Bosnian - bosanski</option>
                                                                <option value="br">Breton - brezhoneg</option>
                                                                <option value="bg">Bulgarian - български</option>
                                                                <option value="ca">Catalan - català</option>
                                                                <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                                                <option value="zh">Chinese - 中文</option>
                                                                <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                                                <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                                                <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                                                <option value="co">Corsican</option>
                                                                <option value="hr">Croatian - hrvatski</option>
                                                                <option value="cs">Czech - čeština</option>
                                                                <option value="da">Danish - dansk</option>
                                                                <option value="nl">Dutch - Nederlands</option>
                                                                <option value="en">English</option>
                                                                <option value="en-AU">English (Australia)</option>
                                                                <option value="en-CA">English (Canada)</option>
                                                                <option value="en-IN">English (India)</option>
                                                                <option value="en-NZ">English (New Zealand)</option>
                                                                <option value="en-ZA">English (South Africa)</option>
                                                                <option value="en-GB">English (United Kingdom)</option>
                                                                <option value="en-US">English (United States)</option>
                                                                <option value="eo">Esperanto - esperanto</option>
                                                                <option value="et">Estonian - eesti</option>
                                                                <option value="fo">Faroese - føroyskt</option>
                                                                <option value="fil">Filipino</option>
                                                                <option value="fi">Finnish - suomi</option>
                                                                <option value="fr">French - français</option>
                                                                <option value="fr-CA">French (Canada) - français (Canada)</option>
                                                                <option value="fr-FR">French (France) - français (France)</option>
                                                                <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                                                <option value="gl">Galician - galego</option>
                                                                <option value="ka">Georgian - ქართული</option>
                                                                <option value="de">German - Deutsch</option>
                                                                <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                                                <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                                                <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                                                <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                                                <option value="el">Greek - Ελληνικά</option>
                                                                <option value="gn">Guarani</option>
                                                                <option value="gu">Gujarati - ગુજરાતી</option>
                                                                <option value="ha">Hausa</option>
                                                                <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                                                <option value="he">Hebrew - עברית</option>
                                                                <option value="hi">Hindi - हिन्दी</option>
                                                                <option value="hu">Hungarian - magyar</option>
                                                                <option value="is">Icelandic - íslenska</option>
                                                                <option value="id">Indonesian - Indonesia</option>
                                                                <option value="ia">Interlingua</option>
                                                                <option value="ga">Irish - Gaeilge</option>
                                                                <option value="it">Italian - italiano</option>
                                                                <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                                                <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                                                <option value="ja">Japanese - 日本語</option>
                                                                <option value="kn">Kannada - ಕನ್ನಡ</option>
                                                                <option value="kk">Kazakh - қазақ тілі</option>
                                                                <option value="km">Khmer - ខ្មែរ</option>
                                                                <option value="ko">Korean - 한국어</option>
                                                                <option value="ku">Kurdish - Kurdî</option>
                                                                <option value="ky">Kyrgyz - кыргызча</option>
                                                                <option value="lo">Lao - ລາວ</option>
                                                                <option value="la">Latin</option>
                                                                <option value="lv">Latvian - latviešu</option>
                                                                <option value="ln">Lingala - lingála</option>
                                                                <option value="lt">Lithuanian - lietuvių</option>
                                                                <option value="mk">Macedonian - македонски</option>
                                                                <option value="ms">Malay - Bahasa Melayu</option>
                                                                <option value="ml">Malayalam - മലയാളം</option>
                                                                <option value="mt">Maltese - Malti</option>
                                                                <option value="mr">Marathi - मराठी</option>
                                                                <option value="mn">Mongolian - монгол</option>
                                                                <option value="ne">Nepali - नेपाली</option>
                                                                <option value="no">Norwegian - norsk</option>
                                                                <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                                                <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                                                <option value="oc">Occitan</option>
                                                                <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                                                <option value="om">Oromo - Oromoo</option>
                                                                <option value="ps">Pashto - پښتو</option>
                                                                <option value="fa">Persian - فارسی</option>
                                                                <option value="pl">Polish - polski</option>
                                                                <option value="pt">Portuguese - português</option>
                                                                <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                                                <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                                                <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                                                <option value="qu">Quechua</option>
                                                                <option value="ro">Romanian - română</option>
                                                                <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                                                <option value="rm">Romansh - rumantsch</option>
                                                                <option value="ru">Russian - русский</option>
                                                                <option value="gd">Scottish Gaelic</option>
                                                                <option value="sr">Serbian - српски</option>
                                                                <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                                                <option value="sn">Shona - chiShona</option>
                                                                <option value="sd">Sindhi</option>
                                                                <option value="si">Sinhala - සිංහල</option>
                                                                <option value="sk">Slovak - slovenčina</option>
                                                                <option value="sl">Slovenian - slovenščina</option>
                                                                <option value="so">Somali - Soomaali</option>
                                                                <option value="st">Southern Sotho</option>
                                                                <option value="es">Spanish - español</option>
                                                                <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                                                <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                                                <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                                                <option value="es-ES">Spanish (Spain) - español (España)</option>
                                                                <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                                                <option value="su">Sundanese</option>
                                                                <option value="sw">Swahili - Kiswahili</option>
                                                                <option value="sv">Swedish - svenska</option>
                                                                <option value="tg">Tajik - тоҷикӣ</option>
                                                                <option value="ta">Tamil - தமிழ்</option>
                                                                <option value="tt">Tatar</option>
                                                                <option value="te">Telugu - తెలుగు</option>
                                                                <option value="th">Thai - ไทย</option>
                                                                <option value="ti">Tigrinya - ትግርኛ</option>
                                                                <option value="to">Tongan - lea fakatonga</option>
                                                                <option value="tr">Turkish - Türkçe</option>
                                                                <option value="tk">Turkmen</option>
                                                                <option value="tw">Twi</option>
                                                                <option value="uk">Ukrainian - українська</option>
                                                                <option value="ur">Urdu - اردو</option>
                                                                <option value="ug">Uyghur</option>
                                                                <option value="uz">Uzbek - o‘zbek</option>
                                                                <option value="vi">Vietnamese - Tiếng Việt</option>
                                                                <option value="wa">Walloon - wa</option>
                                                                <option value="cy">Welsh - Cymraeg</option>
                                                                <option value="fy">Western Frisian</option>
                                                                <option value="xh">Xhosa</option>
                                                                <option value="yi">Yiddish</option>
                                                                <option value="yo">Yoruba - Èdè Yorùbá</option>
                                                                <option value="zu">Zulu - isiZulu</option>
                                                            </select>
                                                           </td>
                                                        </tbody>
                                                    </table>
                                                </div>  
                                                <div class="col-md-6 ">
                                                    <table class="table-responsive">
                                                        <thead>
                                                            <th>Other languages</th>
                                                        </thead>
                                                        <tbody>
                                                           <td class="text-center ml-5">
                                                            <select id="other_languages" name="other_languages">
                                                                <option value="">Select Country</option>
                                                                <option value="af">Afrikaans</option>
                                                                <option value="sq">Albanian - shqip</option>
                                                                <option value="am">Amharic - አማርኛ</option>
                                                                <option value="ar">Arabic - العربية</option>
                                                                <option value="an">Aragonese - aragonés</option>
                                                                <option value="hy">Armenian - հայերեն</option>
                                                                <option value="ast">Asturian - asturianu</option>
                                                                <option value="az">Azerbaijani - azərbaycan dili</option>
                                                                <option value="eu">Basque - euskara</option>
                                                                <option value="be">Belarusian - беларуская</option>
                                                                <option value="bn">Bengali - বাংলা</option>
                                                                <option value="bs">Bosnian - bosanski</option>
                                                                <option value="br">Breton - brezhoneg</option>
                                                                <option value="bg">Bulgarian - български</option>
                                                                <option value="ca">Catalan - català</option>
                                                                <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                                                <option value="zh">Chinese - 中文</option>
                                                                <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                                                <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                                                <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                                                <option value="co">Corsican</option>
                                                                <option value="hr">Croatian - hrvatski</option>
                                                                <option value="cs">Czech - čeština</option>
                                                                <option value="da">Danish - dansk</option>
                                                                <option value="nl">Dutch - Nederlands</option>
                                                                <option value="en">English</option>
                                                                <option value="en-AU">English (Australia)</option>
                                                                <option value="en-CA">English (Canada)</option>
                                                                <option value="en-IN">English (India)</option>
                                                                <option value="en-NZ">English (New Zealand)</option>
                                                                <option value="en-ZA">English (South Africa)</option>
                                                                <option value="en-GB">English (United Kingdom)</option>
                                                                <option value="en-US">English (United States)</option>
                                                                <option value="eo">Esperanto - esperanto</option>
                                                                <option value="et">Estonian - eesti</option>
                                                                <option value="fo">Faroese - føroyskt</option>
                                                                <option value="fil">Filipino</option>
                                                                <option value="fi">Finnish - suomi</option>
                                                                <option value="fr">French - français</option>
                                                                <option value="fr-CA">French (Canada) - français (Canada)</option>
                                                                <option value="fr-FR">French (France) - français (France)</option>
                                                                <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                                                <option value="gl">Galician - galego</option>
                                                                <option value="ka">Georgian - ქართული</option>
                                                                <option value="de">German - Deutsch</option>
                                                                <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                                                <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                                                <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                                                <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                                                <option value="el">Greek - Ελληνικά</option>
                                                                <option value="gn">Guarani</option>
                                                                <option value="gu">Gujarati - ગુજરાતી</option>
                                                                <option value="ha">Hausa</option>
                                                                <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                                                <option value="he">Hebrew - עברית</option>
                                                                <option value="hi">Hindi - हिन्दी</option>
                                                                <option value="hu">Hungarian - magyar</option>
                                                                <option value="is">Icelandic - íslenska</option>
                                                                <option value="id">Indonesian - Indonesia</option>
                                                                <option value="ia">Interlingua</option>
                                                                <option value="ga">Irish - Gaeilge</option>
                                                                <option value="it">Italian - italiano</option>
                                                                <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                                                <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                                                <option value="ja">Japanese - 日本語</option>
                                                                <option value="kn">Kannada - ಕನ್ನಡ</option>
                                                                <option value="kk">Kazakh - қазақ тілі</option>
                                                                <option value="km">Khmer - ខ្មែរ</option>
                                                                <option value="ko">Korean - 한국어</option>
                                                                <option value="ku">Kurdish - Kurdî</option>
                                                                <option value="ky">Kyrgyz - кыргызча</option>
                                                                <option value="lo">Lao - ລາວ</option>
                                                                <option value="la">Latin</option>
                                                                <option value="lv">Latvian - latviešu</option>
                                                                <option value="ln">Lingala - lingála</option>
                                                                <option value="lt">Lithuanian - lietuvių</option>
                                                                <option value="mk">Macedonian - македонски</option>
                                                                <option value="ms">Malay - Bahasa Melayu</option>
                                                                <option value="ml">Malayalam - മലയാളം</option>
                                                                <option value="mt">Maltese - Malti</option>
                                                                <option value="mr">Marathi - मराठी</option>
                                                                <option value="mn">Mongolian - монгол</option>
                                                                <option value="ne">Nepali - नेपाली</option>
                                                                <option value="no">Norwegian - norsk</option>
                                                                <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                                                <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                                                <option value="oc">Occitan</option>
                                                                <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                                                <option value="om">Oromo - Oromoo</option>
                                                                <option value="ps">Pashto - پښتو</option>
                                                                <option value="fa">Persian - فارسی</option>
                                                                <option value="pl">Polish - polski</option>
                                                                <option value="pt">Portuguese - português</option>
                                                                <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                                                <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                                                <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                                                <option value="qu">Quechua</option>
                                                                <option value="ro">Romanian - română</option>
                                                                <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                                                <option value="rm">Romansh - rumantsch</option>
                                                                <option value="ru">Russian - русский</option>
                                                                <option value="gd">Scottish Gaelic</option>
                                                                <option value="sr">Serbian - српски</option>
                                                                <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                                                <option value="sn">Shona - chiShona</option>
                                                                <option value="sd">Sindhi</option>
                                                                <option value="si">Sinhala - සිංහල</option>
                                                                <option value="sk">Slovak - slovenčina</option>
                                                                <option value="sl">Slovenian - slovenščina</option>
                                                                <option value="so">Somali - Soomaali</option>
                                                                <option value="st">Southern Sotho</option>
                                                                <option value="es">Spanish - español</option>
                                                                <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                                                <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                                                <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                                                <option value="es-ES">Spanish (Spain) - español (España)</option>
                                                                <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                                                <option value="su">Sundanese</option>
                                                                <option value="sw">Swahili - Kiswahili</option>
                                                                <option value="sv">Swedish - svenska</option>
                                                                <option value="tg">Tajik - тоҷикӣ</option>
                                                                <option value="ta">Tamil - தமிழ்</option>
                                                                <option value="tt">Tatar</option>
                                                                <option value="te">Telugu - తెలుగు</option>
                                                                <option value="th">Thai - ไทย</option>
                                                                <option value="ti">Tigrinya - ትግርኛ</option>
                                                                <option value="to">Tongan - lea fakatonga</option>
                                                                <option value="tr">Turkish - Türkçe</option>
                                                                <option value="tk">Turkmen</option>
                                                                <option value="tw">Twi</option>
                                                                <option value="uk">Ukrainian - українська</option>
                                                                <option value="ur">Urdu - اردو</option>
                                                                <option value="ug">Uyghur</option>
                                                                <option value="uz">Uzbek - o‘zbek</option>
                                                                <option value="vi">Vietnamese - Tiếng Việt</option>
                                                                <option value="wa">Walloon - wa</option>
                                                                <option value="cy">Welsh - Cymraeg</option>
                                                                <option value="fy">Western Frisian</option>
                                                                <option value="xh">Xhosa</option>
                                                                <option value="yi">Yiddish</option>
                                                                <option value="yo">Yoruba - Èdè Yorùbá</option>
                                                                <option value="zu">Zulu - isiZulu</option>
                                                            </select>
                    
                                                           </td>
                                                        </tbody>
                                                    </table>
                                                </div>  
                                            </div>
                                            <div class="multiBtn text-center pt-5">
                                                <input type="hidden" name="currtab" value="languages">
                                                <button type="submit" class="commonBtn">Submit</button>
                                            </div>
                                        </form>
                                        <div class="pt-5">
                                            <table class="table table-responsive">
                                                <thead>
                                                  <tr>
                                                    <th scope="col-2">No:</th>
                                                    <th scope="col-5">Mother Language</th>
                                                     <th scope="col-5">Other language</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td class="col-2">English</td>
                                                    <td class="col"> Urdu</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="service" class="container tab-pane fade">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Services & Rates</h3>
                                        <p>View Your Profile (Services & Rates)</p>
                                        <p>The Service was added to your profile. Now you can add rates for this service.</p>
                                        <p>Please enter your minimum <b>translation</b> rates here. They will be used to filter out job notifications having rate less than yours. You may 
                                            makes rates invisible on your profile page if you clear the <b>Your rates are visible</b> check box.
                                        </p>
                                        <p>The services, click or tap the <b>Add Service</b> button; to add rates for your services, click the <b>Add Rates</b> button.</p>
                                        <p><b>Note:</b> Job notifications will be sent according to the services selected  on this page. Please do not forget to complete <a href="">your Voice-Over profile</a> if you selected it here.</p>
                                        
                                        <div class="box">
                                                <div class="inputDiv">
                                                    <label for="">Preferred Currency</label>
                                                    <select name="preferred_currency" id="preferred_currency">
                                                        <option value="PKR">Pakistani ruppes (PKR)</option>
                                                    </select>
                                                    <label for=""><b>1 USD = 164.08 PKR</b></label>
                                                </div>
                                                <p><b>Note:</b> The exchange rate above is for reference only</p>
                                                <div class="inputDiv">
                                                    <input type="checkbox" name="notify" id="notify">
                                                    <label for="">Notify about Jobs for non-profit or charitable organizations.</label><br>
                                                    <input type="checkbox" name="rates_visible" id="rates_visible">
                                                    <label for="">Your rates are visible on your profile page.</label>
                                                </div>
                                                <a href="#"><b>Currency Converter</b></a>
                                                <div class="text-center">
                                                    <button type="submit" class="commonBtn">Save</button>
                                                    <button class="commonBtn">Cancel</button>
                                                </div>
                                        </div>
                                        <div class="box" style="margin:20px 0px;">
                                            <table class="table-responsive serviceTable" style="width: 100%;margin: 20px 0px;">
                                            <tbody>
                                                <tr>
                                                    <td><b>Other</b></td>
                                                    <td>Add Rates</td>
                                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Subtitling</b></td>
                                                    <td>Add Rates</td>
                                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        
                                        </div>
                                        <div class="text-center">
                                          <button class="commonBtn">Add Service</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="voice-Over" class="container tab-pane {{$voiceover}}">   
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="commonDiv">
                                    <h3>Voice-Over</h3>
                                    <label for="">Choose Language</label>
                                    <div class="inputDiv">
                                        <form action="{{route('user-save-voice-over')}}" method="post">
                                            @csrf
                                            <select name="language" id="language" required="required">
                                                <option value="">Select Language</option>
                                                <option value="en">English</option>
                                                <option value="ud">Urdu</option>
                                            </select>
                                            <input type="hidden" name="currtab" value="voiceover">
                                            <button type="submit" class="addLanguageBtn commonBtn">Add Language</button>
                                            <br>
                                        </form>
                                    </div>
                                    <table class="table-responsive voiceOverTable">
                                        <thead>
                                            <tr>
                                                <th><b>Selected Language</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="specialization" class="container tab-pane {{$specializationtab}}">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Specialization</h3>
                                        <p>View Your Profile (Specialization)</p>
                                        <p>Please select your subject areas adn click ot tab to <b>Save</b> Button</p>
                                        <form action="{{route('user-save-specilizations')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Acting and Directing">
                                                        <label for="">Acting and Directing</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" name="spicializations[]" value="Ecology">
                                                        <label for="">Ecology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Medicine - Public Health Education & Poromotion">
                                                        <label for="">Medicine - Public Health Education & Poromotion</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Advertising">
                                                        <label for="">Advertising</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Economics">
                                                        <label for="">Economics</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Medicine - Social Psychology">
                                                        <label for="">Medicine - Social Psychology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Arespace Engineering">
                                                        <label for="">Arespace Engineering</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Education">
                                                        <label for="">Education</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Medicine - Taxicology">
                                                        <label for="">Medicine - Taxicology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Agriculture">
                                                        <label for="">Agriculture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]" value="Electrical Engineering">
                                                        <label for="">Electrical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medicine (General)</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Agronomy and Crop Science</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Engineering</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medieval and Renaissance Studies</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Aircraft</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Entomology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Metallurgical Engineering</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Antomy</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Enterpreneurship</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Military Technologies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Animal Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Enviornmental Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Mining & Mineral Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Antropology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Ethnic and Culture Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Mining & Petrolium Technology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Applied Mathematics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Fibre, Textile and Weaving</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Molecular Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Aquaculture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Film & Cinema Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Music</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Archaeology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Finance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Music History & Literature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Architecture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Fire Protection</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Naval Architecture And Marine Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Art</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Fishing & Fisheries Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Nuclear Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Astronomy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Food Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Oceanography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Astrophysics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Fornsics Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Oil & Gas Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Atmospheric Sciences and Meterology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Foresty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Optics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Automotive</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Genealogy/Family History Research</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Organic Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Aviation</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">General</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Patent Translaion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Banking & Financial</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Genetics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Petrochemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Bible and Biblical Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Geochemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Petrolium Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Bio Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Geography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Philosophy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Bioengineering and Biomedical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Geology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Photographic Art</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Geophysics and Seismology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Photography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biomedical</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Gerontology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Physical and Theoretical Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biometrics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Health</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Physical Education Teaching and Coaching</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biophysics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Heating, Air Condition and Refrigeration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Physics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biopsycology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">History</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Political Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biostatistics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Hospitality</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Polymer Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Biotechnology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Humanities and Humanistics Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Psychology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Botany</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Information Science and Systems</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Raditions Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Broadcast Jouralism</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Internet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Radio Television Broadcasting</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Buildings</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Islamic Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Religion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Business Adminitration and Management</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Journalism and Mass Communication</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Religion and Religious Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Busines General</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Law and Legal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Science (General)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Business Marketing</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Liguistics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Sociology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Cartography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Literature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Software Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Ceramics Arts and Ceramics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Manufacturing (Metal Working and Product, Instruments, Funiture, Printing, Clothing, etc)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Sport and Fitness</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Chemical Technology and Related Industries</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Marine and Aquatics Biology</label>
                                                    </div>
                                                </div>
                                            
                                            <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Taxation</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Mathematics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Telecommuincations</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Child Care</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Mechanical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Textiles Sciences and Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Civil Engineering</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medicine - Acupuncture and Oriental Medicine</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Theatre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Computer and Information Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medicine - Dentistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Theology and Theological Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Computer Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medicine - Medical Technology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Theology and Methematical Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Computer Games and Gambling, Electronic Games, Games of Chance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Medicine - Microbology and Bacterioloy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="spicializations[]">
                                                        <label for="">Tourism and Travel</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Criminology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Neuroscience</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Transportation</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Culinary Arts</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Mdeicine - Nursing</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Veteinary</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Data Communications</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Occupatinal Health and Industrial Hygiene</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Visual and Performing Arts</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Data Processing</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Ophthalmology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Women Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Design and Applied Arts</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Pahrmacology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Zoology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Desktop Publising (DTP)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Psychiatry</label>
                                                    </div>
                                                </div>
                                                </div>
                
                                            <div class="multiBtn pt-5">
                                                <input type="hidden" name="currtab" value="specialization">
                                                <button type="submit" class="commonBtn">Submit</button>
                                            </div>
                                           
                                        </form>
                                        <p style="margin-top:20px" class="notice"><b>Note:</b> Job notification will be send according to the subject areas selected on this page.</p>
                                        <p><b>Hint:</b> Do not forget to select a general specialization if you selected a narrow one. For example, if you selected Aerospace Engineering, select also Engineering. See the <a href="">Subject Index</a> for more information</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div id="software" class="container tab-pane {{$softwarestab}}">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="commonDiv">
                                        <h3>Software</h3>
                                        <p>View Your Profile (Specialization)</p>
                                        <p>Please select your subject areas adn click ot tab to <b>Save</b> Button</p>
                                        <form action="{{route('user-save-software-tools')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="softwares[]" value="Across">
                                                        <label for="">Across</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="softwares[]" value="IBM TranslationManager">
                                                        <label for="">IBM TranslationManager</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="softwares[]" value="PASSOLO">
                                                        <label for="">PASSOLO</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="softwares[]" value="Adobe Acrobt">
                                                        <label for="">Adobe Acrobt</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox" name="softwares[]" value="Idiom WorldServer">
                                                        <label for="">Idiom WorldServer</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">PowerPoint</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Adobe Captivate</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">JCAT</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">QuarkXPress</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Adobe Illustrator</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">MemoQ</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Robohelp</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Adobe InDesign</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Meta Texis</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">SDLX Translation Suite</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Adobe Photoshop</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">MultiCorpora</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">STAR Transit</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">AidTrans Studio</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">MultiCorpora</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">STAR Transit</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">AidTrans Studio</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">MultiTrans</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">TRADOS</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">AutoCAD</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">OmegaT</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">TRANS Suite 2000</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Deja Vu</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Open Language Tools</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">TransAssist</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Heartsome Translation Suite</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">PageMaker</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">WordFast</label>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <p style="margin-top:20px" class="notice"><b>Note:</b> Job notification will be send according to the subject areas selected on this page.</p>
                                                <p><b>Other Soft</b> (Max. 500 characters, including spaces)</p>
                                                <div class="inputDiv">
                                                    <div class="inputSpan">
                                                        <textarea name="" id="" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            <div class="multiBtn pt-5">
                                                <input type="hidden" name="currtab" value="softwares">
                                                <button class="commonBtn">Submit</button>
                                            </div>
                                           
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div id="files" class="container tab-pane fade">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Files</h3>
                                        <p>View Automatically Inserted Links to You Files:</p>
                                        <a href="">On Your Profile</a> 
                                        <a href="">On Your Voice Page</a>
                                        <p>As a regular, you can upload on the TranslatorCafe.com. Web server several files up to <b>2,048</b> KB. Master Members can upload up to <b>10,240</b> KB.</p>
                                        <p>Example of Such File are:</p>
                                        <ul style="padding: 0px 40px; list-style: disc;">
                                            <li>Your detailed presentation page or resourcebundle_get_error_message</li>
                                            <li>Your transaction samples (doc or pdf format)</li>
                                            <li>Your voice welcome message (only flv, vp6, mp3 or mp4 audio or video format)</li>
                                            <li>Your voice-over demo files (only flv, vp6, mp3 or mp4 audio or video format)</li>
                                            <li>Your electronic business card vCard (vcf format)</li>
                                            <li>Images showing you interpreting at a conference (gif, jpeg or png format)</li>
                                        </ul>
                                        <p>Using HTML images tags and link to files.</p>
                                        <p>You have total 42,42 Kb Uploaded and <b>2,005.76</b> KB for free space. The limit is 2,048 KB.</p>
                                        <form action="{{route('delete.user.files')}}" method="post">
                                            @csrf
                                            <table>
                                                <thead>
                                                    <th>File Name and Link</th>
                                                    <th>File Size</th>
                                                    <th>Download Count</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkBoxDiv">
                                                                <input type="checkbox" name="user_files[]" value="">
                                                                <div class="contentDiv">
                                                                    <p><b>Areeb's_Resume.pdf</b></p>
                                                                    <p>CV</p>
                                                                    <p><b>Link to File:</b> /cafe/file/?id=188175</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>42.24 KB</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="deleteSelected">Delete Selected</button>
                                        </form>
                                        <form action="{{route('user.save.files')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <p><b>Upload File</b></p>
                                            <div class="inputDiv">
                                                <label for="">File Title:</label>
                                                <div class="inputSpan">
                                                    <input type="text" name="file_title" id="file_title" required="required">
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">File:</label>
                                                <div class="inputSpan">
                                                    <input type="file" name="file" id="file" required="required">
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Purpose:</label>
                                                <div class="inputSpan">
                                                    <select name="purpose" id="purpose" required="required">
                                                        <option value="">Select File Type</option>
                                                        <option value="Resumes File">Resumes File</option>
                                                        <option value="Project File">Project File</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Language:</label>
                                                <div class="inputSpan">
                                                    <select name="language" id="language" required="required">
                                                        <option value="">Select Language</option>
                                                        <option value="1">English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Comments:</label>
                                                <div class="inputSpan">
                                                    <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <p><b>Instruction :</b></p>
                                            <ul style="padding: 0px 30px;list-style: disc;">
                                                <li>Files Must be less than <b>1,024</b> KB.</li>
                                                <li>Non-Latin and accented character are not accepted in file names.</li>
                                                <li>Please select the language of the file content. do not select the language if the content is language-neutral, for example for images files.</li>
                                                <li>You can enter Optional File title and comments on the file in any language.</li>
                                                <li>Link to your Uploaded resume files along with the title and comments will be automatically shown under your resume on your profile page (Background)
                                                    <b>only if you submitted your resume in HTML or text-only format. If your resume is absent, </b>
                                                </li>
                                                <li>Do not include common verification data such as <b>your or your mother's maiden name, date of birth and marital status.</b> Your potential client do not need it. At the same time, this information can be <b>used by someone to impersonate you.</b></li>
                                                <li>If you made a mistake and want to edit you comments, language or purpose, click or tap the Edit link near the file name.</li>
                                                <li>Links to your uploded voice-over flv, vp6, mp3 or mp4 files along with file titles
                                                    will be automatically shown on your Voice-Over Profile page. Files are displayed according to the
                                                    file title. If you want your files to be displayed in a particular order, start their titles with number.
                                                </li>
                                                <li>Links to the <b>TC Player</b>, which will play your uploaded flv, vp6, mp3 or mp4 video or audio files, can be posted on any Web page.</li>
                                                <li>Links to your uploaded <b>General Purpose files</b> will not be automatically shown anywhere in your profile. However, you can insert
                                                    links to these elsewhere in your profile, for example in your resume.
                                                </li>
                                                <li>If you encounter <b>too fast or too slow playback of an MP3 file</b>, your MP3 file contains variable bit rate according. Flash isn't very good at handling these, it's best to stick to constant bit 
                                                    rate encoding. Also make sure to stick to a sampling frequency that is a multitude of 11.025 kHz (that is, use 11.025, 22,050, 44100 kHz do not use, for example, 48 kHz, which phose problems). The free <a href="">iTunes software</a>
                                                    has a basic, decent MP3 encoder.
                                                </li>
                                            </ul>
                                           <button  type="submit" class="deleteSelected">Upload</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script type="text/javascript">
    
</script>
@endsection
