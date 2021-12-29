@extends('layouts.master' ,['page_title' => 'Post a Job'])
@section('css')
<style>
   #from_language {
      text-transform: capitalize;
   }

   #to_language {
      text-transform: capitalize;
   }
</style>
@endsection
@section('content')
<section id="profileBanner">
   <h3>Post A Job</h3>
</section>
<section id="postJobDiv" class="padd-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class="commonDiv">
               <div class="headingSection">
                  <h3>Job Posting or Editing</h3>
               </div>
               <div class="selectionBox">
                  <p>Because this is your first job posting and no agency is associated with your profile, some of the form fields are hidden to make the process of posting a job easier. If you want to fill out the full form, please select the Full form option.</p>
                  <div class="radoBtn">

                     <input type="radio" id="html" name="fav_language" value="Full form" @if($editjob->job_form=="Full form"){{'checked'}}@endif>
                     <label for="html">Full form with all fields</label><br>
                     <input type="radio" id="css" name="fav_language" value="Simple form" @if($editjob->job_form=="Simple form"){{'checked'}}@endif>
                     <label for="css">Simple form</label><br>
                  </div>
               </div>
               <div class="fullForm">
                  <div class="inputDiv editJob">
                     <label for="">Edit Job</label>
                     <select class="form-control" name="edit_job" id="edit_job">
                        <option value="">Select Job</option>
                        @foreach( $jobs as $job)
                        <option value="{{$job->id}}" @if($job->id==$editjob->id){{'selected'}}@endif>{{$job->job_title}}</option>
                        @endforeach
                     </select>
                     <!-- <input class="form-control" type="text" name="edit_job" id="edit_job" placeholder="Job Title" required="required" value="0"> -->
                     <button>Load</button>
                  </div>
                  <form action="{{route('update-a-job')}}" method="post">
                     @csrf

                     <input type="hidden" name="job_id" value="{{$editjob->id}}">
                     <div class="inputDiv">
                        <label for="">Job Title <span class="required">*</span></label>
                        <input class="form-control" type="text" name="job_title" id="job_title" value="{{$editjob->job_title ?? ''}}" placeholder="Job Title" required="required">
                     </div>
                     <!-- <div class="inputDiv">
                        <label for="">Job Budget <span class="required">*</span></label>
                        <input min="0" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="form-control" type="number" name="job_budget" id="job_budget" placeholder="Budget" required="required">
                        </div> -->
                     <div class="inputDiv">
                        <label for="">Job Description <span class="required">*</span></label>
                        <textarea class="form-control" name="job_desc" id="job_desc" cols="30" rows="10" required>{{$editjob->job_desc ?? ''}}</textarea>
                     </div>
                     <p class="hint">
                        Max. 2500 characters, incl. spaces.<br>(Short description of the project, required expertise, payment, and any other relevant information. Please provide as many details as possible regarding the specific subject matter of your project. Do not enter "technical", "medical", "legal", etc. — please be specific: e.g., "manual for a vacuum cleaner", "an article from Scientific American on new advances in cancer treatment", "a lease agreement from Spain", etc. Please also provide translators with an exact or approximate word count of your document.)
                     </p>
                     <div class="languageDiv">
                        <h5>Job Types</h5>
                        <div class="multiple-select">
                           <select name="job_type" class="form-control p-0" required>

                              <option value="">Select Service</option>
                              <option value="Closed captioning" @if($editjob->job_type=="Closed captioning"){{'selected'}}@endif>Closed captioning</option>
                              <option value="Copywriting" @if($editjob->job_type=="Copywriting"){{'selected'}}@endif>Copywriting</option>
                              <option value="Desktop publishing" @if($editjob->job_type=="Desktop publishing"){{'selected'}}@endif>Desktop publishing</option>
                              <option value="Editing" @if($editjob->job_type=="Editing"){{'selected'}}@endif>Editing</option>
                              <option value="Interpreting" @if($editjob->job_type=="Interpreting"){{'selected'}}@endif>Interpreting</option>
                              <option value="Interpreting – conference" @if($editjob->job_type=="Interpreting – conference"){{'selected'}}@endif>Interpreting – conference</option>
                              <option value="Interpreting – court/legal" @if($editjob->job_type=="Interpreting – court/legal"){{'selected'}}@endif>Interpreting – court/legal</option>
                              <option value="Interpreting – medical" @if($editjob->job_type=="Interpreting – medical"){{'selected'}}@endif>Interpreting – medical</option>
                              <option value="Interpreting – phone" @if($editjob->job_type=="Interpreting – phone"){{'selected'}}@endif>Interpreting – phone</option>
                              <option value="Interpreting – sign language" @if($editjob->job_type=="Interpreting – sign language"){{'selected'}}@endif>Interpreting – sign language</option>
                              <option value="Localization" @if($editjob->job_type=="Localization"){{'selected'}}@endif>Localization</option>
                              <option value="Other" @if($editjob->job_type=="Other"){{'selected'}}@endif>Other</option>
                              <option value="Project management" @if($editjob->job_type=="Project management"){{'selected'}}@endif>Project management</option>
                              <option value="Proofreading" @if($editjob->job_type=="Proofreading"){{'selected'}}@endif>Proofreading</option>
                              <option value="Research" @if($editjob->job_type=="Research"){{'selected'}}@endif>Research</option>
                              <option value="Subtitling" @if($editjob->job_type=="Subtitling"){{'selected'}}@endif>Subtitling</option>
                              <option value="Teaching" @if($editjob->job_type=="Teaching"){{'selected'}}@endif>Teaching</option>
                              <option value="Technical Review" @if($editjob->job_type=="Technical Review"){{'selected'}}@endif>Technical Review</option>
                              <option value="Technical writing" @if($editjob->job_type=="Technical writing"){{'selected'}}@endif>Technical writing</option>
                              <option value="Terminology research" @if($editjob->job_type=="Terminology research"){{'selected'}}@endif>Terminology research</option>
                              <option value="Transcription" @if($editjob->job_type=="Transcription"){{'selected'}}@endif>Transcription</option>
                              <option value="Translation" @if($editjob->job_type=="Translation"){{'selected'}}@endif>Translation</option>
                              <option value="Typesetting" @if($editjob->job_type=="Typesetting"){{'selected'}}@endif>Typesetting</option>
                              <option value="Voice-over" @if($editjob->job_type=="Voice-over"){{'selected'}}@endif>Voice-over</option>
                           </select>
                        </div>

                        <div class="radioDiv">
                           <input type="radio" id="Intermediate" name="job_type_level" value="Intermediate" {{ $editjob->job_level=='Intermediate' ? 'checked' : '' }}>
                           <label for="Intermediate">Intermediate</label>
                           <input type="radio" id="Potential" name="job_type_level" value="Potential" {{ $editjob->job_level=='Potential' ? 'checked' : '' }}>
                           <label for="Potential">Potential</label>
                           <input type="radio" id="In-House" name="job_type_level" value="In-House" {{ $editjob->job_level=='In-House' ? 'checked' : '' }}>
                           <label for="In-House">In-House</label>
                           <input type="radio" id="Tele-Community" name="job_type_level" value="Tele-Community" {{ $editjob->job_level=='Tele-Community' ? 'checked' : '' }}>
                           <label for="Tele-Community">Tele-Community</label>
                        </div>
                        <p><b>Expalanation of Job Types</b></p>
                        <h5>Deadlines</h5>
                        @php
                        if($editjob->expiry_status=="0")
                        {
                        $style="display:none";

                        }
                        elseif($editjob->expiry_status=="1")
                        {
                        $style="display:block";

                        }
                        else{
                        $checked="";
                        }
                        @endphp
                        <div class="radioDiv">
                           <input type="radio" id="No-dealine" name="expiry_status" value="0" {{$editjob->expiry_status =='0' ? 'checked' : ''}}>
                           <label for="No-dealine">No-dealine</label>
                           <input type="radio" id="Set-Date" name="expiry_status" value="1" {{$editjob->expiry_status =='1' ? 'checked' : ''}}>
                           <label for="Set Date">Set Date</label>
                        </div>
                        <div class="setDateDiv" style="{{$style}}">
                           <input class="form-control" type="date" name="expiry_date" value="{{$editjob->expiry_date ?? ''}}" />
                        </div>
                     </div>
                     <div class="languageDiv">
                        <h5>Languages</h5>
                        <p class="warning">At least one language pair is required.</p>
                        <p>Please include both language pairs if you need an interpreter. For example, if you need an English-French interpreter, select English>French
                           and French>English.
                        </p>
                        <div class="multiple-select pairlng">
                           @foreach( $editjob->jobspairlang as $pair)

                           <div class="row">
                              <div class="col-md-4">
                                 <select class="form-control" id="from_language" name="from_language[]" required>
                                    @foreach($worldlang as $lang)
                                    <option value="{{$lang['code']}}" @if($pair->from_lang==$lang['code']){{'selected'}}@endif>{{$lang['name']}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-1">
                                 <span>>></span>
                              </div>
                              <div class="col-md-4">
                                 <select class="form-control" id="to_language" name="to_language[]" required>
                                    @foreach($worldlang as $lang)
                                    <option value="{{$lang['code']}}" @if($pair->to_lang==$lang['code']){{'selected'}}@endif>{{$lang['name']}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-md-4">
                        <button type="button" class="commonBtn addpair">Add Language Pair</button>
                     </div>
                     @php
                     if($editjob->job_form=="Full form"){
                     $style="display:block";
                     }
                     else{
                     $style="display:none";
                     }
                     @endphp
                     <div class="simpleForm" style="{{$style}}">

                        <div style="padding: 15px 50px">
                           <div class="requiredSpecial">
                              <div class="d-flex lableDiv">
                                 <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                                 <p style="margin: 0px;">Required Specialization</p>
                              </div>
                              <div class="viewDiv">

                                 @include("screens.includes.jobspecializtioncheckbox")
                              </div>
                           </div>
                        </div>
                        <div style="padding: 15px 50px">
                           <p>Select one or several Specialization, but less than 20.</p>
                           <div class="requiredSoftware">
                              <div class="d-flex lableDiv">
                                 <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                                 <p style="margin: 0px;">Required software</p>
                              </div>
                              <div class="viewDiv">
                                 @include('screens.includes.jobsoftwarecheckbox')
                              </div>
                           </div>
                           <!-- <div class="offeredRate">
                           <div class="d-flex lableDiv">
                              <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                              <p style="margin: 0px;">Offered rate (optional)</p>
                           </div>
                           <div class="viewDiv">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td style="white-space:nowrap;">
                                          <input type="text" name="Rate" style="text-align: right; width: 65px;" size="4" maxlength="9" value="">&nbsp;
                                          <select style="width: 120px;" id="Currency" name="Currency">
                                             <option value="27" tc:rt="0.8649">Euro</option>
                                             <option value="1" tc:rt="1">US dollars</option>
                                             <option value="2" tc:rt="1.2389">Canadian dollars</option>
                                             <option value="3" tc:rt="0.7303">British pounds</option>
                                             <option value="6" tc:rt="113.9698">Japanese yen</option>
                                             <option value="10" tc:rt="137.9445">Algerian dinars</option>
                                             <option value="11" tc:rt="99.6891">Argentine pesos</option>
                                             <option value="12" tc:rt="1.3299">Australian dollars</option>
                                             <option value="14" tc:rt="1">Bahamian dollars</option>
                                             <option value="15" tc:rt="2">Barbadian dollar</option>
                                             <option value="17" tc:rt="1">Bermudian dollar</option>
                                             <option value="18" tc:rt="5.6378">Brazilian real</option>
                                             <option value="19" tc:rt="1.6916">Bulgarian leva</option>
                                             <option value="20" tc:rt="813.5836">Chilean pesos</option>
                                             <option value="21" tc:rt="6.403">Chinese yuan</option>
                                             <option value="23" tc:rt="22.186">Czech koruny</option>
                                             <option value="24" tc:rt="6.4347">Danish kroner</option>
                                             <option value="26" tc:rt="15.6933">Egyptian pounds</option>
                                             <option value="28" tc:rt="2.0798">Fijian dollars</option>
                                             <option value="31" tc:rt="7.7792">Hong Kong dollars</option>
                                             <option value="32" tc:rt="311.3294">Hungarian forint</option>
                                             <option value="33" tc:rt="128.6874">Icelandic krónur</option>
                                             <option value="34" tc:rt="74.9362">Indian rupees</option>
                                             <option value="35" tc:rt="14176.86">Indonesian rupiahs</option>
                                             <option value="37" tc:rt="3.1623">Israeli new shekels</option>
                                             <option value="38" tc:rt="153.9366">Jamaican dollars</option>
                                             <option value="39" tc:rt="0.709">Jordanian dinars</option>
                                             <option value="22" tc:rt="0.6476">Latvian lats</option>
                                             <option value="41" tc:rt="1507.5">Lebanese pounds</option>
                                             <option value="56" tc:rt="3.1818">Lithuanian litas</option>
                                             <option value="43" tc:rt="4.1412">Malaysian ringgits</option>
                                             <option value="44" tc:rt="20.5564">Mexican pesos</option>
                                             <option value="61" tc:rt="27.8696">New Taiwan dollars</option>
                                             <option value="46" tc:rt="1.395">New Zealand dollars</option>
                                             <option value="47" tc:rt="8.4421">Norway Kroner</option>
                                             <option value="48" tc:rt="171.6788">Pakistani rupees</option>
                                             <option value="49" tc:rt="50.5507">Philippine pesos</option>
                                             <option value="50" tc:rt="3.9868">Polish zlotych</option>
                                             <option value="52" tc:rt="4.2806">Romanian leu</option>
                                             <option value="53" tc:rt="70.8759">Russian rubles</option>
                                             <option value="54" tc:rt="3.75">Saudi riyals</option>
                                             <option value="55" tc:rt="1.3488">Singapore dollars</option>
                                             <option value="57" tc:rt="15.2342">South African rand</option>
                                             <option value="40" tc:rt="1175.03">South Korean won</option>
                                             <option value="59" tc:rt="8.597">Swedish kronor</option>
                                             <option value="9" tc:rt="0.9156">Swiss francs</option>
                                             <option value="62" tc:rt="33.2786">Thai baht</option>
                                             <option value="63" tc:rt="9.6048">Turkish liras</option>
                                             <option value="64" tc:rt="26.4422">Ukrainian hryvnia</option>
                                          </select>
                                          &nbsp;
                                          <select id="Payment" name="Payment">
                                             <option selected="selected" value="0">per word</option>
                                             <option value="1">per hour</option>
                                          </select>
                                       </td>
                                       <td class="jfn">
                                          <a target="_blank" href="tools.asp?pn=currency"><b>Currency Converter</b></a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <p class="jfn">Please enter only translation rate here. If it's editing or proofreading, please make a note about your rate in the Project Description box. <b>Jobs mentioning translation rates less than US$ 0.05/word may be removed from the Job Board without notice.</b></p>
                              <p class="jfn"><b>Note:</b> For Japanese source language, please enter translation rate per Japanese character instead of rate per word.</p>
                           </div>
                        </div> -->
                           <div class="jobLocation">
                              <div class="d-flex lableDiv">
                                 <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                                 <p style="margin: 0px;">Job Location</p>
                              </div>
                              <div class="viewDiv">
                                 <div id="jpSecLocation" style="display: block;">
                                    <div class="fv">
                                       <table style="width:100%">
                                          <tbody>
                                             <tr>
                                                <td>country</td>
                                                <td>city</td>
                                                <td>state/region</td>
                                             </tr>
                                             <tr>
                                                <td>

                                                   <select id="Country" name="Country" class="country">
                                                      <option value="">Select Country</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}" @if($editjob->country_id == $country->id){{'selected'}} @endif >{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                </td>
                                                <td><input maxlength="50" style="width: 120px;" id="City" name="City" value="{{$editjob->city}}"></td>
                                                <td><input maxlength="50" style="width: 120px;" id="StateRegion" name="StateRegion" value="{{$editjob->state}}"></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <div class="jfn">(For example, for an interpretation or in-house job; please note that this field is for information only. Notification about this job will be sent only to translators living in countries selected below.)</div>
                                    </div>
                                    <div class="fn jpAux" style="display: block;">Linguists must live in:</div>
                                    <div class="fv jpAux" style="display: block;">
                                       <table style="width:100%">
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <select id="MustLiveIn1" name="linguists_live[]" class="country">
                                                      <option value="">Select Country</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}" @if($editjob->linguists_live[0] == $country->id){{'selected'}} @endif;>{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                   &nbsp;or
                                                </td>
                                                <td>
                                                   <select id="MustLiveIn2" name="linguists_live[]" class="country">
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                   &nbsp;or
                                                </td>
                                                <td>
                                                   <select id="MustLiveIn3" name="linguists_live[]" class="country">
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <div class="jfn">(For example, if you want your project to be translated by a translator living only in the target language country; select one or several countries for an interpretation job.)</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <input type="checkbox" name="job_notify_master_member" style="margin-right: 10px;">
                           <label for=""> Send notifications only to <a href="">Master Members</a></label><br> -->

                           <input type="checkbox" name="job_show_master_member" style="margin-right: 10px;" {{ $editjob->show_job_master_member == 1 ? 'checked' : '' }}>
                           <label for=""> Show job to Master Members immediately, to all users after a 12-hour delay.</label><br>
                           <p>Please note that the request to send notifications only to Master Members will always be considered, however, sometimes it cannot be guaranteed. For example, if the number of Master Members who qualify for this job offer is less than 10, it's in the interests of the outsourcer to send notifications to all members who qualify, not only to Master members.</p>
                           <!-- <input type="checkbox" name="publish" style="margin-right: 10px;">
                           <label for=""> Not to be published in other forums or mailing lists.</label><br>
                           <p>Jobs posted on the TranslatorsCafe.com Job Board are considered to be sent to the public at large and links to them may be posted elsewhere unless the job poster selects this check box.</p> -->
                           <input type="checkbox" name="job_show_tc_user" style="margin-right: 10px;" {{ $editjob->show_tc_user == 1 ? 'checked' : '' }}>
                           <label for=""> Show this job only to TC registered users.</label><br>
                        </div>
                     </div>
                     <div style="margin:10px 50px">
                        <div class="d-flex" style="align-item: center;">
                           <input type="checkbox" name="cerfity" style="margin-right: 10px;" required {{ $editjob->certify == 1 ? 'checked' : '' }}>
                           <label for=""> I certify that the information I have provided in this job offer form and during the process of registration is true and correct and does not contain any illegal content or links to illegal or objectionable Web sites (e.g. with adult content). I further certify that I am willing to provide my feedback to all language professionals who offered their services for this job and that I will not ask them to translate any illegal or objectionable content (e.g. adult).</label><br>
                        </div>
                        <div class="fv div notes">
                           <p class="jfn">The IP address of your computer 203.175.72.37 will be recorded.&nbsp;&nbsp;<a class="tcHelp" href="#_" data-help=";C;17"><sup title="Click or tap to get help" class="qmark">?</sup></a><br>Your country determined by your IP address:<img src="/cafe/images/flags/PK.gif" alt="PK" style="width:18px;height:12px;"> Pakistan</p>
                           <p>HTML is not allowed, except for &lt;b&gt;&lt;/b&gt;, &lt;i&gt;&lt;/i&gt; tags.</p>
                        </div>
                        <p style="margin: 10px 0px;">When you have completed filling out this form, please click or tap the Submit button. Please do not click or tap several times and be prepared to wait for a result. On the next page you will be provided with a job number. If you find any mistakes in your posting after its submission, you can always edit the job. Note that you must use your job number to do so. A confirmation message will be sent to your e-mail address hamza.alam@accrualgroup.com. If you cannot receive it, you may want to check your e-mail address. <a href="">More information.</a></p>
                     </div>
                     <button type="submit" class="commonBtn">Submit</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="rightDiv">
               <div class="lookingFor languageProfessional">
                  <p class="header">Clients Looking for a Language Professional:</p>
                  <ul>
                     <li><a href="{{ url('/post-a-job') }}">Post a Job</a></li>
                     <li><a href="{{url('/search-freelancer')}}">Find a Translator</a></li>
                     <li><a href="{{url('/search-agencies')}}">Find a Translation Agency</a></li>
                  </ul>
               </div>
               <div class="lookingFor">
                  <p class="header">Language Professionals:</p>
                  <ul>
                     <li><a href="">Translation Jobs</a></li>
                     <li><a href="">Terminology Help</a></li>
                     <li><a href="">Discussion Forums</a></li>
                     <li><a href="">Web Site Builder</a></li>
                     <li><a href="">Web Site Builder</a></li>
                     <li><a href="">Discussion Forums</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<div id="pairlngdev" style="display: none;">
   <div class="row" style="margin-top:10px">
      <div class="col-md-4">
         <select class="form-control" id="from_language" name="from_language[]">
            <option value="">Select Language</option>
            @foreach($worldlang as $lang)
            <option value="{{$lang['code']}}">{{$lang['name']}}</option>
            @endforeach
         </select>
      </div>
      <div class="col-md-1">
         <span>>></span>
      </div>
      <div class="col-md-4">
         <select class="form-control" id="to_language" name="to_language[]">
            <option value="">Select Language</option>
            @foreach($worldlang as $lang)
            <option value="{{$lang['code']}}">{{$lang['name']}}</option>
            @endforeach
         </select>
      </div>
      <div class="col-md-1">
         <span class="fa fa-minus removepairlng" style="cursor:pointer"></sapn>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   var i = 1;
   $(".addpair").click(function() {
      if (i <= 7) {
         $(".pairlng").append($("#pairlngdev").html());
         i++
      }
   })

   $(document).on("click", ".removepairlng", function() {
      $(this).parent().parent().remove();
      i--;
   })
   $(document).ready(function() {
      $('input[name="fav_language"]').change(function() {
         var val = $(this).val();
         if (val == "Full form") {
            $(".simpleForm").css("display", "block");
         } else {
            $(".simpleForm").css("display", "none")
         }
      });
      $(".requiredSpecial .lableDiv").click(function() {
         if ($(".requiredSpecial .viewDiv").css("display") == "block") {
            $(".requiredSpecial .viewDiv").css("display", "none");
         } else {
            $(".requiredSpecial .viewDiv").css("display", "block")
         }

      })
      $(".requiredSoftware .lableDiv").click(function() {
         if ($(".requiredSoftware .viewDiv").css("display") == "block") {
            $(".requiredSoftware .viewDiv").css("display", "none");
         } else {
            $(".requiredSoftware .viewDiv").css("display", "block")
         }

      })
      $(".offeredRate .lableDiv").click(function() {
         if ($(".offeredRate .viewDiv").css("display") == "block") {
            $(".offeredRate .viewDiv").css("display", "none");
         } else {
            $(".offeredRate .viewDiv").css("display", "block")
         }

      })
      $(".jobLocation .lableDiv").click(function() {
         if ($(".jobLocation .viewDiv").css("display") == "block") {
            $(".jobLocation .viewDiv").css("display", "none");
         } else {
            $(".jobLocation .viewDiv").css("display", "block")
         }

      })
   });
</script>
@endsection