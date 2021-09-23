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
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">All My Bids</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="jobPosted commonDiv">
                                            <p class="text-center"><b>Job Posted By:</b></p>
                                            <img src="{{asset('assets/img/Forum images.png')}}" alt="" class="img-fluid">
                                            <p><b>CMM Language</b></p>
                                            <p>India</p>
                                            <p>Company:</p>
                                            <p><b>Unknow</b></p>
                                            <p>Email At:</p>
                                            <p><b>abc@gmail.com</b></p>
                                            <p>Is it a free Email?</p>
                                            <p>Get <b>425</b> othe Jobs posted by <b>CMM Language</b></p>
                                            <p>Seacrh Tc from <b>CMM Language</b></p>
                                            <hr>
                                            <p>Bids: <span><b>7</b></span></p>
                                            <p>View: <span><b>69</b></span></p>
                                            <hr>
                                            <p>Notification:</p>
                                            <p>All member</p>
                                            <p>Message Sent: <span><b>106</b></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="jobDetailDiv commonDiv">
                                            <p>Job Type: <b>Translation,</b> Intermediate, Telecommunity</p>
                                            <p>Langauages:</p>
                                            <p><b>English > Swedish</b></p>
                                            <p>Specilizations : <b>General</b></p>
                                            <hr>
                                            <p>Dear Translator</p>
                                            <p>We have an assignment and below are the detail - </p>
                                            <p>Language Pair - English to Swedish</p>
                                            <p>Word Count - 29 words</p>
                                            <p>Domain - General (Product Ingredients)</p>
                                            <p>Delivery Deadline - today by before 6 p.m IST</p>
                                            <p>Payment - 30 days for the date of invoice</p>
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