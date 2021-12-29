@extends('layouts.master' ,['page_title' => 'Home'])
@section('content')
<section id="homeBanner">
    <div id="mainbanner" class="banner">
        <div class="container-fluid">
            <div class="banner-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="leftBannerContent">
                            <h1>The Easiest Way To Hire <br> Expert Translate</h1>
                            <h2>lorem ipsum dolor sit amit, consectetur adipiscing elit ut aliquam, purus <br> sit amet luctus</h2>
                            <form id="leftBannerForm" action="{{route('search-job')}}">
                                <div class="inputfield">
                                    <div class="row">
                                        <div class="col-md-3 inputfield-select">
                                            <select class="form-control" id="slanguage" name="slanguage">
                                                <option value="">Source Language</option>
                                                @foreach($worldlang as $lang)
                                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 inputfield-select">
                                            <select class="form-control" id="tlanguage" name="tlanguage">
                                                <option value="">Target Language</option>
                                                @foreach($worldlang as $lang)
                                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 inputfield-select">
                                            <select name="job_type" class="form-control">
                                                <option value="">Select Job Type</option>
                                                <option value="Closed captioning">Closed captioning</option>
                                                <option value="Copywriting">Copywriting</option>
                                                <option value="Desktop publishing">Desktop publishing</option>
                                                <option value="Editing">Editing</option>
                                                <option value="Interpreting">Interpreting</option>
                                                <option value="Interpreting – conference">Interpreting – conference</option>
                                                <option value="Interpreting – court/legal">Interpreting – court/legal</option>
                                                <option value="Interpreting – medical">Interpreting – medical</option>
                                                <option value="Interpreting – phone">Interpreting – phone</option>
                                                <option value="Interpreting – sign language">Interpreting – sign language</option>
                                                <option value="Localization">Localization</option>
                                                <option value="Other">Other</option>
                                                <option value="Project management">Project management</option>
                                                <option value="Proofreading">Proofreading</option>
                                                <option value="Research">Research</option>
                                                <option value="Subtitling">Subtitling</option>
                                                <option value="Teaching">Teaching</option>
                                                <option value="Technical Review">Technical Review</option>
                                                <option value="Technical writing">Technical writing</option>
                                                <option value="Terminology research">Terminology research</option>
                                                <option value="Transcription">Transcription</option>
                                                <option value="Translation">Translation</option>
                                                <option value="Typesetting">Typesetting</option>
                                                <option value="Voice-over">Voice-over</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 inputfield-select ">
                                            <div class="input-bar-item ">
                                                <button class="btn btn-info w-100">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="language">
                                <p>
                                    <span>Popular Categories:</span>
                                    @if(count($toplang)>0)
                                    @foreach($toplang as $lng)
                                    <span class="spantext">{{$lng->from_lang ?? ''}}-{{$lng->to_lang ?? ''}}</span>
                                    @endforeach
                                    @else
                                    <span class="spantext">No Job Category rated yet.</span>
                                    @endif

                                </p>
                            </div>
                        </div>
                    </div>
                    @if(count($toprateagency)>0)
                    @foreach($toprateagency as $rateagency)
                    <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                        <div class="rightDiv">
                            <div class="lookingFor">
                                <p class="header">AGENCY OF THE DAY
                                </p>
                                <div class="sliderDiv">
                                    <div class="profileBox">
                                        <img src="{{asset('profile-images/').'/'.$rateagency->profile_photo ?? ''}}" alt="" class="img-fluid">
                                        <div class="userDetail">
                                            <h5>{{$rateagency->fname ?? ''}} {{$rateagency->lname ?? ''}}</h5>
                                            <p>Spanish Translator</p>
                                        </div>
                                        <hr>
                                        <div class="reviewDiv">
                                            <p><img src="assets/img/star.png" alt="" class="img-fluid"> {{$rateagency->totalreview ?? ''}} Reviews ({{$rateagency->avgrate ?? ''}})</p>
                                            <p>
                                                <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                                @php
                                                $countryname=\App\Models\Country::where('id',$rateagency->country_id)->first();
                                                @endphp
                                                {{$countryname->country_name ?? ''}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                        <div class="rightDiv">
                            <div class="lookingFor">
                                <p class="header">AGENCY OF THE DAY(not set)
                                </p>
                                <div class="sliderDiv">
                                    <div class="profileBox">
                                        <img src="{{asset('assets/img/user.png')}}" alt="" class="img-fluid">
                                        <div class="userDetail">
                                            <h5>Test</h5>
                                            <p>Test Translator</p>
                                        </div>
                                        <hr>
                                        <div class="reviewDiv">
                                            <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 review (5))</p>
                                            <p>
                                                <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                                Test Coutnry
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                        <div class="rightDiv">
                            <div class="lookingFor">
                                <p class="header">AGENCY OF THE DAY(not set)
                                </p>
                                <div class="sliderDiv">
                                    <div class="profileBox">
                                        <img src="{{asset('assets/img/user.png')}}" alt="" class="img-fluid">
                                        <div class="userDetail">
                                            <h5>Test1</h5>
                                            <p>Test1 Translator</p>
                                        </div>
                                        <hr>
                                        <div class="reviewDiv">
                                            <p><img src="assets/img/star.png" alt="" class="img-fluid"> 1 review (4.0))</p>
                                            <p>
                                                <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                                Test1 Coutnry
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>

    </div>

</section>
<section id="companyOverview" class="companyOverview">
    <div class="container ">
        <div class="row ">
            <div class="col-4">
                <div class="totalTranslate">
                    <img class="overviewImg" src="assets/img/Total Translator.png">
                    <div class="translateContent">
                        <h2>{{$totaltranslater}}+</h2>
                        <p>Total Translate</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="totalTranslate">
                    <img class="overviewImg" src="assets/img/Job Posted.png">
                    <div class="translateContent">
                        <h2>{{count($jobs)}}+</h2>
                        <p> Jobs Posted</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="totalTranslate">
                    <img class="overviewImg" src="assets/img/Satisfied Clients.png">
                    <div class="translateContent">
                        <h2>{{$completedjob ?? ''}}+</h2>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="findJobSection" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="font-weight-600 mb-3">Latest Jobs </h3>
                    </div>
                    <div class="formDiv">
                        <div class="col-lg-12">
                            <form action="{{route('job-search')}}" method="get">
                                <div class="multiDiv">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select name="job_type" class="form-control p-0 pl-4" required>
                                                <option value="">Select Job Type</option>
                                                <option value="Closed captioning">Closed captioning</option>
                                                <option value="Copywriting">Copywriting</option>
                                                <option value="Desktop publishing">Desktop publishing</option>
                                                <option value="Editing">Editing</option>
                                                <option value="Interpreting">Interpreting</option>
                                                <option value="Interpreting – conference">Interpreting – conference</option>
                                                <option value="Interpreting – court/legal">Interpreting – court/legal</option>
                                                <option value="Interpreting – medical">Interpreting – medical</option>
                                                <option value="Interpreting – phone">Interpreting – phone</option>
                                                <option value="Interpreting – sign language">Interpreting – sign language</option>
                                                <option value="Localization">Localization</option>
                                                <option value="Other">Other</option>
                                                <option value="Project management">Project management</option>
                                                <option value="Proofreading">Proofreading</option>
                                                <option value="Research">Research</option>
                                                <option value="Subtitling">Subtitling</option>
                                                <option value="Teaching">Teaching</option>
                                                <option value="Technical Review">Technical Review</option>
                                                <option value="Technical writing">Technical writing</option>
                                                <option value="Terminology research">Terminology research</option>
                                                <option value="Transcription">Transcription</option>
                                                <option value="Translation">Translation</option>
                                                <option value="Typesetting">Typesetting</option>
                                                <option value="Voice-over">Voice-over</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control p-0 pl-4" name="country" id="country">
                                                <option value="">Country</option>
                                                @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control p-0 pl-4" id="slanguage" name="slanguage">
                                                <option value="">Source Language</option>
                                                @foreach($worldlang as $lang)
                                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control p-0 pl-4" id="tlanguage" name="tlanguage">
                                                <option value="">Target Language</option>
                                                @foreach($worldlang as $lang)
                                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;
                                <button type="submit" class="commonBtn">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="multiCards">
                            @if(count($jobs)>0)
                            @foreach($jobs as $job)
                            <div class="cardDiv">
                                <div class="priceInfo">
                                    <div class="detailDiv">
                                        <h4><a href="{{url('job-details',$job->id)}}">{{$job->job_title}}</a></h4>
                                        <span class="price">${{$job->budget}}</span>
                                        @foreach($job->jobspairlang as $lng)
                                        <span>{{$lng->from_lang}}>{{$lng->to_lang}}</span>
                                        @endforeach
                                        <p>{{$job->job_desc}}</p>
                                    </div>
                                    <hr>
                                    <div class="locationDate">
                                        <div class="detial">
                                            <p>
                                                <span>Poposals</span>
                                                <span>{{count($job->jobproposals ?? 0)}}</span>
                                            </p>
                                            <p>
                                                <span>Location</span>
                                                @php
                                                if(isset($job->user->country_id))
                                                {
                                                $location=\App\Models\Country::where('id',$job->user->country_id)->first();
                                                }
                                                @endphp
                                                <span>{{$location->country_name ?? ''}}</span>
                                            </p>
                                            <p>
                                                <span>Expiry</span>
                                                @php
                                                if($job->expiry_date)
                                                {
                                                $to = \Carbon\Carbon::createFromFormat('Y-m-d', $job->expiry_date);
                                                $from = \Carbon\Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
                                                $diff_in_days = $to->diffInDays($from);
                                                }
                                                @endphp
                                                <span>@if($job->expiry_date){{$diff_in_days." Day Left"}}@else{{'No Deadline'}}@endif</span>
                                            </p>
                                        </div>
                                        @if(auth::check() && auth::user()->user_status=="Freelancer")
                                        @php
                                        $favourite=\App\Models\FavouriteJobs::where('jobs_id',$job->id)->where('user_id',auth::user()->id)->first();
                                        @endphp
                                        @if($favourite)
                                        <i class="fa fa-heart favoriteIcon removefavor" data-id="{{$job->id}}" aria-hidden="true"></i>
                                        @else
                                        <i class="fa fa-heart-o favoriteIcon makefavor" data-id="{{$job->id}}" aria-hidden="true"></i>
                                        @endif
                                        @endif
                                        <a href="{{url('job-details',$job->id)}}"><button class="commonBtn" style="padding: 8px 32px;">Apply Now</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="d-flex justify-content-center">
                                {!! $jobs->links() !!}
                            </div>
                            @else
                            <center>
                                <h3><strong>No Record Found!</strong></h3>
                            </center>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="rightDiv">
                    <div class="lookingFor">
                        <p class="header">What are you Looking for?</p>
                        <ul>
                            @if(auth::check() && auth::user()->user_status=="Employer")
                            <li><a href="{{ url('/post-a-job') }}">Post a Job</a></li>
                            <li><a href="{{ url('my-job') }}">My Jobs</a></li>
                            @endif
                            @if(auth::check() && auth::user()->user_status=="Freelancer")
                            <li><a href="{{url('/favourite-job')}}">Favourite Job</a></li>
                            <li><a href="{{url('/my-assign-jobs')}}">My Ongoing Jobs</a></li>
                            @endif
                            <li><a href="{{url('/search-freelancer')}}">Find a Translator</a></li>
                            <li><a href="{{url('/search-agencies')}}">Find a Translation Agency</a></li>
                        </ul>
                    </div>
                    <div class="lookingFor">
                        <p class="header">Need Help?:</p>
                        <ul>
                            <li><a href="{{url('job-search').'?job_type=Translation'}}">Translation Jobs</a></li>
                            <li><a href="">Terminology Help</a></li>
                            <li><a href="{{url('/forums')}}">Discussion Forums</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    @foreach($topfreelancer as $freelancer)
                    <div class="lookingFor">
                        <p class="header">LINGUISTS OF THE DAY</p>
                        <div class="sliderDiv">
                            <div class="profileBox">
                                <img src="{{asset('profile-images/').'/'. $freelancer->profile_photo ?? ''}}" alt="" class="img-fluid">
                                <div class="userDetail">
                                    <h5>{{$freelancer->fname ?? ''}} {{$freelancer->lname ?? ''}}</h5>
                                    <p>Spanish Translator</p>
                                </div>
                                <hr>
                                <div class="reviewDiv">
                                    <p><img src="assets/img/star.png" alt="" class="img-fluid"> {{$freelancer->totalreview ?? ''}} Reviews ({{$freelancer->avgrate}})</p>
                                    <p>
                                        <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                        @php
                                        $countryname=\App\Models\Country::where('id',$freelancer->country_id)->first();
                                        @endphp
                                        {{$countryname->country_name ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<section id="centerBanner" class="centerBanner" style="background-image: url('assets/img/Home\ Background.png');">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Since The start</h1>
                <h2>We provide stable service with expert</h2>
                <p>Freelancer around the globle are looking for work</p>
                <div class="btn-parent d-flex">
                    <div class="centerbannerbtn1">
                        <a href="{{route('search-job')}}"><button type="button" class="btnD1">View Job</button></a>
                    </div>
                    <div class="centerbannerbtn2">
                        <a href="{{ url('post-a-job') }}"><button type="button" class="btnD2">Post a job</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Services" class=" Services mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <h2 class="heading">How it Works?</h2>
            </div>
            <div class="col-md-6 mainpart2 ">
                <p class="heading1">For Employer</p>
                <p class="heading2">For Freelancer</p>
            </div>

        </div>
        <div class="row text-center pt-5">
            <div class="col-md-4">
                <div class="servicesIcon">
                    <div class="imgparent">
                        <a href="{{url('register')}}"><img class="servicesImg" src="assets/img/Group 22.png"></a>
                    </div>
                    <div class="servicesContent">
                        <a href="{{url('register')}}">
                            <h2>Create in Account</h2>
                        </a>
                        <p>Become an Employer by creating an account</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="servicesIcon">
                    <div class="imgparent">
                        <a href="{{route('post-a-job')}}"><img class="servicesImg" src="assets/img/Group 23.png"></a>
                    </div>
                    <div class="servicesContent">
                        <h2><a href="{{route('post-a-job')}}">Find a job</a></h2>
                        <p>Tell Us what you need done in seconds</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="servicesIcon">
                    <div class="imgparent">
                        <a href="{{route('top-freelancer')}}"><img class="servicesImg" src="assets/img/Group 24.png"></a>
                    </div>
                    <div class="servicesContent">
                        <h2>Apply on a job</h2>
                        <p>Get your bids in a while and choose a from best </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-3">
                <div class="servicesIcon">
                    <div class="imgparent">
                        <img class="servicesImg" src="assets/img/Group 25.png">
                    </div>
                    <div class="servicesContent">
                        <h2>Get payment safely</h2>
                        <p>Only pay when you'r completely satisfied</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    $(".makefavor").click(function() {
        jobs_id = $(this).attr('data-id');
        $.ajax({
            url: "{{route('make-job-fav')}}",
            method: 'get',
            data: {
                jobs_id: jobs_id
            },
            success: function(res) {

                if (res == "success") {
                    Swal.fire('Job is Added in Favourite', '', 'success');
                } else {
                    Swal.fire('Oops!', '', 'error');
                }
            }
        })
    });

    //remove from favourite
    $(".removefavor").click(function() {
        jobs_id = $(this).attr('data-id');
        $.ajax({
            url: "{{route('remove-job-fav')}}",
            method: 'get',
            data: {
                jobs_id: jobs_id
            },
            success: function(res) {

                if (res == "success") {
                    Swal.fire('Job is Removed From Favourite', '', 'success');
                } else {
                    Swal.fire('Oops!', '', 'error');
                }
            }
        })
    })
</script>
@endsection