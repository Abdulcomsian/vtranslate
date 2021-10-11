@extends('layouts.master' ,['page_title' => 'Contact Us'])
@section('content')
<section id="profileBanner">
    <h3>Contact Us</h3>
</section>

<section id="contactDiv" class="padd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="commonDiv">
                    <h3>Contact Us</h3>
                    <form action="{{route('contact-us')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="inputDiv">
                            <label for="">Subject</label>
                            <input type="text" name="subject" id="Subject" class="form-control" placeholder="Enter Subject" required="required">
                        </div>
                        <div class="inputDiv">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" required="required" value="{{auth::user()->email ?? ''}}">
                        </div>
                        <div class="inputDiv">
                            <label for="">Attachement</label>
                            <input type="file" name="file" id="file" class="form-control" placeholder="Enter Email" required="required">
                        </div>
                        <div class="inputDiv">
                            <label for="">Question</label>
                            <div class="textArea">
                                <textarea name="message" id="message" cols="30" rows="5" required="required"></textarea>
                                <p>250 characters left. </p>
                                <p>Summarize your question in one sentence.</p>
                                <p>Example Question: "How do I change my e-mail?"</p>

                            </div>
                        </div>
                        <p class="notice">You will be able to describe your question in detail on the next page that will appear after you click or tap the Submit Your Request button.</p>

                        <div class="multiBtn">
                            <button type="submit" class="commonBtn mb-4 ">Submit You Request</button>
                            <a href="/"><button type="button" class="commonBtn">Back</button></a>
                        </div>

                    </form>
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
                            @if(auth::check() && auth::user()->user_status=="Translator")
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection