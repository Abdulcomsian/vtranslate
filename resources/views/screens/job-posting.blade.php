@extends('layouts.master' ,['page_title' => 'Post a Job'])
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
                            <h3>Job Posting</h3>
                            <p>Because this is your first job posting and no agency is associated with your profile, some of the form fields are hidden to make the process of posting a job easier. If you want to fill out the full form, please select the Full form option.</p>
                        </div>
                        <form action="">
                           <div class="inputDiv">
                                <label for="">Edit Job</label>
                                <input type="text" name="" id="">
                           </div>
                           <div class="inputDiv">
                            <label for="">Job Title <span class="required">*</span></label>
                            <input type="text" name="" id="">
                       </div>
                       <div class="languageDiv">
                           <h5>Languages</h5>
                           <p class="warning">At least one language pair is required.</p>
                           <p>Please include both language pairs if you need an interpreter. For example, if you need an English-French interpreter, select English>French 
                            and French>English.</p>
                            <div class="multiple-select">
                                <select name="" id="">
                                    <option value="">Select Language</option>
                                </select>
                                <span>>></span>
                                 <select name="" id="">
                                     <option value="">Select Language</option>
                                 </select>
                                 <a href="" class="commonBtn">Add Language Pair</a>
                            </div>
                       </div>
                       <div class="textareaDiv">
                        <label for="">Project Description <span class="required">*</span></label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <span>Max. 2500 characters, incl. spaces</span>
                        <p>(Short description of the project, required expertise, payment, and any other relevant information. Please provide as many details as 
                            possible regarding the specific subject matter of your project. Do not enter "technical", "medical", "legal", etc. — please be specific: e.g., 
                            "manual for a vacuum cleaner", "an article from Scientific American on new advances in cancer treatment", "a lease agreement from 
                            Spain", etc. Please also provide translators with an exact or approximate word count of your document.)</p>
                   </div>
                   <div class="checkBoxDiv">
                    <div class="inputSpan">
                        <div class="checkBox">
                            <input type="checkbox" name="" id="">
                            <label for="">I certify that the information I have provided in this job offer form and during the process of registration is true and correct and does not contain any illegal content or links to illegal or objectionable Web sites (e.g. with adult content). I further certify that I am willing to provide my feedback to all language professionals who offered their services for this job and that I will not ask them to translate any illegal or objectionable content (e.g. adult).</label>
                        </div>
                        
                    </div>
                </div> 
                <button class="commonBtn">Submit</button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rightDiv">
                        <div class="lookingFor">
                            <p class="header">Clients Looking for a Language Professional:</p>
                            <ul>
                                <li><a href="">Post a Job</a></li>
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