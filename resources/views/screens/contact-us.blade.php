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
                        <p class="warning">Please choose a topic from the list below</p>
                        <form action="">
                            <div class="inputDiv">
                                <label for="">Topic</label>
                                <select name="" id="">
                                    <option value="Select Topic">Select Topic</option>
                                </select>
                            </div>
                            <div class="inputDiv">
                                <label for="">SubTopic</label>
                                <select name="" id="">
                                    <option value="Select Topic">Select Subtopic</option>
                                </select>
                            </div>
                            <div class="inputDiv">
                                <label for="">Question</label>
                                <div class="textArea">
                                    <textarea name="" id="" cols="30" rows="5"></textarea>
                                    <p>250 characters left.                                    </p>
                                    <p>Summarize your question in one sentence.</p>
                                    <p>Example Question: "How do I change my e-mail?"</p>
                                    
                                </div>
                            </div>
                            <p class="notice">You will be able to describe your question in detail on the next page that will appear after you click or tap the Submit Your Request button.</p>
                            
                            <div class="multiBtn">
                                <button class="commonBtn mb-4 ">Submit You Request</button>
                                <a href="#"><button class="commonBtn">Back</button></a>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rightDiv">
                        <div class="lookingFor">
                            <p class="header">Clients Looking for a Language Professional:</p>
                            <ul>
                                <li><a href="job-posting.html">Post a Job</a></li>
                                <li><a href="">Find a Translator</a></li>
                                <li><a href="">Find a Translation Agency</a></li>
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
    </section>
@endsection