@extends('layouts.master' ,['page_title' => 'Job Details'])
@section('content')
<section id="profileBanner">
    <h3>Job Details</h3>
</section>
<section id="jobDetail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bidding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Send a Message to the Job Poster</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">All My Bids</a>
                    </li> -->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="jobPosted commonDiv">
                                    <p class="text-center"><b>Job Posted By:</b></p>
                                    <img src="{{asset('profile-images/').'/'.$jobs_details[0]->profile_photo}}" alt="" class="img-fluid">
                                    <p><b>{{$jobs_details[0]->fname ?? ''}} {{$jobs_details[0]->lname ?? ''}}</b></p>
                                    <p>{{$jobs_details[0]->country_name ?? ''}}</p>
                                    <p>Company:</p>
                                    <p><b>{{$jobs_details[0]->company_name ?? 'Unknow'}}</b></p>
                                    <p>Email At:</p>
                                    <p><b>{{$jobs_details[0]->email ?? ''}}</b></p>
                                    <p>Is it a free Email?</p>
                                    <hr>
                                    <!-- <p>Bids: <span><b>0</b></span></p> -->
                                    <p>View: <span><b>0</b></span></p>
                                    <hr>
                                    <p>Notification:</p>
                                    <p>All member</p>
                                    <p>Message Sent: <span><b>0</b></span></p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="jobDetailDiv commonDiv">
                                    <p>Job Type: <b>{{$jobs_details[0]->job_type}},</b> {{$jobs_details[0]->job_level}}</p>
                                    <p>Langauages:</p>
                                    <p><b>
                                            @foreach($jobs_details as $pair_lng)
                                            {{$pair_lng->from_lang.'>>'.$pair_lng->to_lang}},
                                            @endforeach
                                        </b></p>
                                    <p>Specilizations :
                                        <b>
                                            @if(isset($jobs_details[0]->spicializations))
                                            @foreach(json_decode($jobs_details[0]->spicializations) as $parilng)
                                            {{$parilng}},
                                            @endforeach
                                            @endif
                                        </b>
                                    </p>
                                    <hr>
                                    <p>
                                        {{$jobs_details[0]->job_desc ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection