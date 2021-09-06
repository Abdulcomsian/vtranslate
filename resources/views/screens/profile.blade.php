@extends('layouts.master' ,['page_title' => 'Profile'])
@section('content')
<section id="profileBanner">
        <div class="text-center">
            <h3>Complete Profile</h3>
        </div>

        <!-- <div id="breadcrumb">
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <nav>
                        <ol class="breadcrumb justi" style="max-width: 15%; float: right; background: none;">
                            <li class="breadcrumb-item"><a href="home.html" style=" color: #fff;">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #fff;;">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>    -->
    </section>
    <section id="profileDiv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabDiv">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                               <a class="nav-link active" data-toggle="pill" href="#profile"><span>My Profile</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#status" class="nav-link" data-toggle="pill"><span>Status</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#general" class="nav-link" data-toggle="pill"><span>General</span> </a>
                            </li>
                            <li class="nav-item">
                               <a href="#resume" class="nav-link" data-toggle="pill"><span>Resume</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#self-promotion"><span>Self Promotion</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#agency" class="nav-link" data-toggle="pill"><span>Agency</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#language" class="nav-link" data-toggle="pill"><span>Languages</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#service" class="nav-link" data-toggle="pill"><span>Services & Rates</span> </a>
                             </li>
                             <li class="nav-item">
                                <a href="#voice-Over" class="nav-link" data-toggle="pill"><span>Voice-Over</span> </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" data-toggle="pill" href="#specialization"><span>Specialization</span> </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#software" class="nav-link" data-toggle="pill"><span>Software</span> </a>
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
                <div id="profile" class="container tab-pane active">
                    <div class="commonDiv">
                        <p>View Your Profile</p>
                        <p class="notice"><b>Important:</b> Please fill in all fields marked with an asterisk (*) before you attempt to send this form. Please use plain text. You can use any language.</p>
                        <p>Please note that the period of waiting for your input is limited on all Web sites. It is set to 30 minutes here. If you are not ready to fill out all fields, then first fill out only the required fields and save the form. After saving, enter your information in other fields or only in one field and save again. You can use this technique for completing any forms on the Internet. Because sometimes your session ends unexpectedly, sometimes errors happen. So to save your time, save often.</p>
                        <h4 class="font-weight-600">General Information</h4>
                        <div class="infoDiv">
                            <span>User Name: <b>Honey King</b></span>
                            <span>Current Status: <b>Lingusit</b></span>
                            <span>
                                <a href="">Click or tap to change</a>
                            </span>
                        </div>
                        <h4 class="font-weight-600">Contact Information</h4>
                        <form action="">
                            <div class="inputDiv">
                                <label for="">Title:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                    <p>Mr., Ms., Dr., etc.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">First Name (Given):</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Last Name (Family):</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                    <p>Please make sure your first, last and middle names begin with a capital letter and do not use all capital letters.  </p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">E-Mail Address:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Postal Code (Zip):</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Address:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">City:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">State/Region:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Country:</label>
                                <div class="inputSpan">
                                    <select name="" id="">
                                        <option value="">Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Telephone:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Fax:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Mobile Phone:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Second Email:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Website:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                    <p>Please enter only one URL and check how it works after submitting. Please do not use this field for links to your profile in other directories — such links will not be shown.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
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
                            </div>
                            <hr>
                            <div class="inputDiv">
                                <label for="">Company Name:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Position:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <hr>
                            <h4 class="font-weight-600">Password Reset Question</h4>
                            <div class="inputDiv">
                                <label for="">Secret Question:</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                             <div class="inputDiv">
                                <label for="">Answer To Your 
                                    Secret Question</label>
                                <div class="inputSpan">
                                    <input type="text" name="" id="">
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
                            <hr>
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
                            </div>
                            <hr>
                            <div class="inputDiv">
                                <label for="">Specialization 
                                    Keywords:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                    <p>Used in addition to the subject areas selected on the Specialization page.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Accreditations:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                    <p>For example, accreditation in courts.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Membership in 
                                    professional 
                                    associations:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                    <p>Only professional translator associations like ATA or ITI.
                                        Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Platform & hardware:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                    <p>Max. 500 characters, including spaces.</p>
                                </div>
                            </div>
                            <div class="inputDiv">
                                <label for="">Cover Letter:</label>
                                <div class="inputSpan">
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
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
                                    <textarea name="" id="" cols="30" rows="4"></textarea>
                                    <p>For example, “Reliable, high-quality translation and subtitling”,
                                        Max. 150 characters, including spaces. HTML is not allowed.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="inputDiv">
                                <label for="">Private Information:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Make All Your Information Private</label>
                                    </div>
                                    <p>If you select this check box, your profile will not be shown to the site users and search engines. Your name will not appear in the search results. However, your name will always be shown if you decide to post messages in TranslatorsCafe.com forums or ask questions in TCTerms. Another exception is job posting. If you consider posting a job on the Job Board, your profile will be accessible from the Selected Job page to members having a full profile.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Disallow Indexing:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Disallow search engines to index your profile</label>
                                    </div>
                                    <p>If you select this check box and your profile is public, the meta tag on your profile page will tell search engines not to index this page. Well-behaved search engines will obey, others will not. Therefore, if you want to keep a secret, do not publish it! See Disallow Search Engines to Index Your Profile for more information.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Display Contact Info:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Display your contact information on your Profile Page.                                        </label>
                                    </div>
                                    <p>If you select this check box and your profile is public, the meta tag on your profile page will tell search engines not to index this page. Well-behaved search engines will obey, others will not. Therefore, if you want to keep a secret, do not publish it! See Disallow Search Engines to Index Your Profile for more information.</p>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">News notification:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Can we send you news and updates about Ve Translate.com? 
                                            Please check if Yes.</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Jobs notification:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Can we send you new jobs from the Job Board? Please check if Yes.
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Show rated users:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Show the list of all outsourcers and service providers rated by you 
                                            on your profile page.
                                            
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            <div class="inputDiv">
                                <label for="">Show rated users:</label>
                                <div class="inputSpan">
                                    <div class="checkBox">
                                        <input type="checkbox" name="" id="">
                                        <label for="">Show feedback from outsourcers and/or service providers on your 
                                            profile page.                                            
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            <p>When you have completed filling out this form, please click or tap the Save button. Please note that the recent changes made 
                                in your profile will not appear immediately in the search results</p> 
                            <button class="commonBtn">Save</button>        
                        </form>
                    </div>
                </div>
               <div id="status" class="container tab-pane fade">
                    <div class="commonDiv">
                        <h3>Select Status</h3>
                        <span>User Name: <b>Honey King</b></span>
                        <span>Current Status: <b>Lingusit</b></span>
                        <form action="">
                            <p>Please select your status:</p>
                            <fieldset>
                                <div class="radioBtnDiv">
                                    <input type="radio" value="value1" name="group1">
 
                                    <div class="optionInfo">
                                        <h4>Translator</h4>
                                        <p>If you are a freelance translator, interpreter or other language professional and do not own an agency, please select translator.</p>
                                    </div>
                                </div>
                                <div class="radioBtnDiv">
                                    <input type="radio" value="value2" name="group1">
                                    <div class="optionInfo">
                                        <h4>Employer</h4>
                                        <p>If yo are looking for a traslator, interpreter then select employer. The supplementary agency information form will be provided later.</p>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="commonBtn">Save</button>
                        </form>
                    </div>
                </div>
                <div id="general" class="container tab-pane fade">   
                    <div id="profile" class="container tab-pane active">
                        <div class="commonDiv">
                            <p>View Your Profile</p>
                            <p class="notice"><b>Important:</b> Please fill in all fields marked with an asterisk (*) before you attempt to send this form. Please use plain text. You can use any language.</p>
                            <p>Please note that the period of waiting for your input is limited on all Web sites. It is set to 30 minutes here. If you are not ready to fill out all fields, then first fill out only the required fields and save the form. After saving, enter your information in other fields or only in one field and save again. You can use this technique for completing any forms on the Internet. Because sometimes your session ends unexpectedly, sometimes errors happen. So to save your time, save often.</p>
                            <h4 class="font-weight-600">General Information</h4>
                            <div class="infoDiv">
                                <span>User Name: <b>Honey</b></span>
                                <span>Current Status: <b>Lingusit</b></span>
                                <span>
                                    <a href="">Click or tap to change</a>
                                </span>
                            </div>                            
                            <h4 class="font-weight-600">Contact Information</h4>
                            <form action="">
                                <div class="inputDiv">
                                    <label for="">Title:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                        <p>Mr., Ms., Dr., etc.</p>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">First Name (Given):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Last Name (Family):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                        <p>Please make sure your first, last and middle names begin with a capital letter and do not use all capital letters.  </p>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">E-Mail Address:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Postal Code (Zip):</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Address:</label>
                                    <div class="inputSpan">
                                        <textarea name="" id="" cols="30" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">City:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">State/Region:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Country:</label>
                                    <div class="inputSpan">
                                        <select name="" id="">
                                            <option value="">Country</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Telephone:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Fax:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Mobile Phone:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Second Email:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Website:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                        <p>Please enter only one URL and check how it works after submitting. Please do not use this field for links to your profile in other directories — such links will not be shown.</p>
                                    </div>
                                </div>
                                <div class="inputDiv">
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
                                </div>
                                <hr>
                                <div class="inputDiv">
                                    <label for="">Company Name:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Position:</label>
                                    <div class="inputSpan">
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="resume" class="container tab-pane fade">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="resumeContent" class="commonDiv">
                                        <h3>Resume</h3>
                                        <p class="warning">Upload Your Resume</p>
                                        <form action="">
                                            
                                            <div class="control-group">
                                                <div class="controls bootstrap-timepicker">
                                                    <label class="form-label" for="customFile">Upload Your Resume</label>
                                                    <input type="file" accept="application/pdf,application/ms-word" class="control " id="customFile" />
                                                </div>
                                            </div>
                
                                            <div class="multiBtn text-center">
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
                                        <p class="warningself">For self promotion you have to become a pro-member</p>
                                        <form action="">
                                        
                
                                            <div class="multiBtn text-center pt-5">
                                                <button class="commonBtn">Become A Pro Member</button>
                                            </div>
                                           
                                        </form>
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
                <div id="language" class="container tab-pane fade">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Language</h3>
                                        <p class="warningself">You can select languages from below</p>
                                        <form action="">
                                        
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <table>
                                                        <thead>
                                                            <th>Mother languages</th>
                                                        </thead>
                                                        <tbody>
                                                           <td class="text-center ml-5">
                                                            <select id="languages" name="languages">
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
                                                            <select id="languages" name="languages">
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
                                                <button class="commonBtn">Submit</button>
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
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td class="col-2">English</td>
                                                    <td class="col-2">English</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
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
                                        <h4 class="warning pb-2">Services</h4>
                                        <h5 class=" pb-2">Following services are being provided</h5>
                                        
                                         <h5>1. Translation(audio/video)</h5>
                                         <h5>2. voiceover</h5>
                                         <h5></h5>
                                         <h4 class="warning pb-1 pt-3">Rates</h4>
                                         <h5>I work 5$ per hour</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="voice-Over" class="container tab-pane fade">   
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="commonDiv">
                                    <h3>Voice-Over</h3>
                                    <p><b>Voice-Over Working Languages</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="specialization" class="container tab-pane fade">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Specialized Language</h3>
                                        <p class="warningself">Please select your subject areas and click or tap the Save button. ?</p>
                                        <form action="">
                                        
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <table class="table-responsive">
                                                        <tbody>
                                                           <td class="text-center ml-5">
                                                            <select id="languages" name="languages">
                                                                <option value="ad">Acting and Directing</option>
                                                                <option value="el">Ecology</option>
                                                                <option value="mp">Medicine — Public Health Education and Promotion</option>
                                                                <option value="ad">Advertising</option>
                                                                <option value="en">Economics</option>
                                                                <option value="ms">Medicine — Social Psychology</option>
                                                                <option value="ae">Aerospace Engineering</option>
                                                                <option value="ed">Education</option>
                                                                <option value="el">Ecology</option>
                                                                <option value="mt">Medicine — Toxicology</option>
                                                                <option value="ag">Agriculture</option>
                                                                <option value="ee">Electrical Engineering</option>
                                                                <option value="mg">Medicine (General)</option>
                                                                <option value="ac">Agronomy and Crop Science</option>
                                                                <option value="eg">Engineering</option>
                                                                <option value="mr">Medieval and Renaissance Studies</option>
                                                                <option value="ac">Aircraft</option>
                                                                <option value="et">Entomology</option>
                                                                <option value="me">Metallurgical Engineering</option>
                                                                <option value="at">Anatomy</option>
                                                                <option value="ep">Entrepreneurship</option>
                                                                <option value="mt">Military Technologies</option>
                                                                <option value="as">Animal Sciences</option>
                                                                <option value="es">Environmental Science</option>
                                                                <option value="mm">Mining and Mineral Engineering</option>
                                                                <option value="at">Anthropology</option>
                                                                <option value="ec">Ethnic and Cultural Studies</option>
                                                                <option value="mp">Mining and Petroleum Technology</option>
                                                                <option value="am">Applied Mathematics</option>
                                                                <option value="ft">Fibre, Textile and Weaving	</option>
                                                                <option value="mo">Molecular Biology</option>
                                                                <option value="aq">Aquaculture</option>
                                                                <option value="fc">Film and Cinema Studies</option>
                                                                <option value="mu">Music</option>
                                                                <option value="ac">Archaeology</option>
                                                                <option value="fi">Finance</option>
                                                                <option value="mh">Music History and Literature</option>
                                                                <option value="at">Architecture</option>
                                                                <option value="fp">Fire Protection</option>
                                                                <option value="na">Naval Architecture And Marine Engineering</option>
                                                                <option value="ar">Art</option>
                                                                <option value="ff">Fishing and Fisheries Sciences	</option>
                                                                <option value="ne">Nuclear Engineering</option>
                                                                <option value="at">Astronomy</option>
                                                                <option value="fs">Food Sciences	</option>
                                                                <option value="og">Oceanography</option>
                                                                <option value="as">Astrophysics</option>
                                                                <option value="fs">Forensic Science	</option>
                                                                <option value="og">Oil and Gas Engineering</option>
                                                                <option value="as">Atmospheric Sciences and Meteorology</option>
                                                                <option value="fr">Forestry</option>
                                                                <option value="op">Optics</option>
                                                                <option value="am">Automotive</option>
                                                                <option value="gf">Genealogy/Family History Research</option>
                                                                <option value="oc">Organic Chemistry</option>
                                                                <option value="at">Aviation</option>
                                                                <option value="gn">General</option>
                                                                <option value="pt">Patent Translation</option>
                                                                <option value="bf">Banking and Financial</option>
                                                                <option value="gt">Genetics</option>
                                                                <option value="pc">Petrochemistry</option>
                                                                <option value="bb">Bible and Biblical Studies</option>
                                                                <option value="gc">Geochemistry</option>
                                                                <option value="pe">Petroleum Engineering</option>
                                                                <option value="bc">Biochemistry</option>
                                                                <option value="gg">Geography</option>
                                                                <option value="pl">Philosophy</option>
                                                                <option value="bb">Bioengineering and Biomedical Engineering</option>
                                                                <option value="gl">Geology</option>
                                                                <option value="pa">Photographic Arts</option>
                                                                <option value="bl">Biology</option>
                                                                <option value="gs">Geophysics and Seismology</option>
                                                                <option value="pg">Photography</option>
                                                                <option value="bd">Biomedical</option>
                                                                <option value="gt">Gerontology</option>
                                                                <option value="pt">Physical and Theoretical Chemistry</option>
                                                                <option value="bt">Biometrics</option>
                                                                <option value="ht">Health</option>
                                                                <option value="pe">Physical Education Teaching and Coaching</option>
                                                                <option value="by">Biophysics</option>
                                                                <option value="ha">Heating, Air Condition and Refrigeration</option>
                                                                <option value="py">Physics</option>
                                                                <option value="bp">Biopsychology</option>
                                                                <option value="ht">History</option>
                                                                <option value="ps">Political Science</option>
                                                                <option value="bt">Biostatistics</option>
                                                                <option value="hp">Hospitality</option>
                                                                <option value="pc">Polymer Chemistry</option>
                                                                <option value="multiBtn">Biotechnology</option>
                                                                <option value="hh">Humanities and Humanistic Studies</option>
                                                                <option value="pc">Psychology</option>
                                                                <option value="bt">Botany</option>
                                                                <option value="in">Information Sciences and Systems</option>
                                                                <option value="rb">Radiation Biology</option>
                                                                <option value="bj">Broadcast Journalism</option>
                                                                <option value="in">Internet</option>
                                                                <option value="rt">Radio and Television Broadcasting</option>
                                                                <option value="bl">Buildings</option>
                                                                <option value="is">Islamic Studies</option>
                                                                <option value="rl">Religion</option>
                                                                <option value="ba">Business Administration and Management</option>
                                                                <option value="jm">Journalism and Mass Communication</option>
                                                                <option value="rr">Religion and Religious Studies</option>
                                                                <option value="bg">Business General</option>
                                                                <option value="la">Law and Legal</option>
                                                                <option value="sc">Science (General)</option>
                                                                <option value="bu">Business Marketing</option>
                                                                <option value="li">Linguistics</option>
                                                                <option value="so">Sociology</option>
                                                                <option value="ca">Cartography</option>
                                                                <option value="li">Literature</option>
                                                                <option value="se">Software Engineering</option>
                                                                <option value="ca">Ceramics Arts and Ceramics</option>
                                                                <option value="mf">Manufacturing (Metal Working and Products, Instruments, Furniture, Printing, Clothing, etc.)</option>
                                                                <option value="sf">Sport and Fitness</option>
                                                                <option value="ct">Chemical Technology and Related Industries</option>
                                                                <option value="mb">Marine and Aquatic Biology	</option>
                                                                <option value="tx">Taxation</option>
                                                                <option value=""ct>Chemistry</option>
                                                                <option value="mm">Mathematics</option>
                                                                <option value="tt">Telecommunications</option>
                                                                <option value="cc">Child Care	</option>
                                                                <option value="me">Mechanical Engineering	</option>
                                                                <option value="ts">Textile Sciences and Engineering</option>
                                                                <option value="ce">Civil Engineering	</option>
                                                                <option value="ma">Medicine — Acupuncture and Oriental Medicine</option>
                                                                <option value="th">Theatre</option>
                                                                <option value="ci">Computer and Information Sciences</option>
                                                                <option value="">Medicine — Dentistry</option>
                                                                <option value="ts">Theology and Theological Studies</option>
                                                                <option value="ce">Computer Engineering</option>
                                                                <option value="mt">Medicine — Medical Technology</option>
                                                                <option value="tm">Theoretical and Mathematical Physics</option>
                                                                <option value="cg">Computer Games and Gambling, Electronic Games, Games of Chance</option>
                                                                <option value="mm">Medicine — Microbiology and Bacteriology</option>
                                                                <option value="tt">Tourism and Travel</option>
                                                                <option value="cl">Criminology</option>
                                                                <option value="mn">Medicine — Neuroscience</option>
                                                                <option value="ts">Transportation</option>
                                                                <option value="ca">Culinary Arts</option>
                                                                <option value="mn">Medicine — Nursing	</option>
                                                                <option value="vt">Veterinary</option>
                                                                <option value="dc">Data Communications</option>
                                                                <option value="mo">Medicine — Occupational Health and Industrial Hygiene</option>
                                                                <option value="va">Visual and Performing Arts</option>
                                                                <option value="dp">Data Processing</option>
                                                                <option value="mo">Medicine — Ophthalmology</option>
                                                                <option value="ws">Women Studies</option>
                                                                <option value="da">Design and Applied Arts</option>
                                                                <option value="mp">Medicine — Pharmacology</option>
                                                                <option value="zo">Zoology</option>
                                                                <option value="dp">Desktop Publishing (DTP)</option>
                                                                <option value="mp">Medicine — Psychiatry	</option>
                                                            </select>
                    
                                                           </td>
                                                        </tbody>
                                                    </table>
                                                </div>  
                                           
                                            </div>
                
                                            <div class="multiBtn pt-5">
                                                <button class="commonBtn">Submit</button>
                                            </div>
                                           
                                        </form>
                
                                        <div class="pt-5">
                                            <table class="table table-responsive">
                                         
                                                <thead>
                                                  <tr>
                                                    <th scope="col-2">No:</th>
                                                    <th scope="col-10">Specialized Language</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td class="col">English</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td class="col">English</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td class="col">English</td>
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
                 <div id="software" class="container tab-pane fade">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Software</h3>
                                        <h5 class=" pb-2">Please select the software you use and click or tap the Save button.</h5>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <table class="table-responsive">
                                                    <tbody>
                                                       <td class="text-center ml-5">
                                                        <select id="languages" name="languages">
                                                            <option value="">Across</option>
                                                            <option value="">IBM TranslationManager	</option>
                                                            <option value="">PASSOLO</option>
                                                            <option value="">Adobe Acrobat</option>
                                                            <option value="">Idiom WorldServer</option>
                                                            <option value="">PowerPoint</option>
                                                            <option value="">Adobe Captivate</option>
                                                            <option value="">JCAT</option>
                                                            <option value="">QuarkXPress</option>
                                                            <option value="">Adobe Illustrator</option>
                                                            <option value="">MemoQ</option>
                                                            <option value="">Robohelp</option>
                                                            <option value="">Adobe InDesign	</option>
                                                            <option value="">MetaTexis</option>
                                                            <option value="">SDLX Translation Suite</option>
                                                            <option value="">Adobe Photoshop</option>
                                                            <option value="">MultiCorpora</option>
                                                            <option value="">STAR Transit</option>
                                                            <option value="">AidTrans Studio	</option>
                                                            <option value="">MultiTrans</option>
                                                            <option value="">TRADOS</option>
                                                            <option value="">AutoCAD</option>
                                                            <option value="">OmegaT</option>
                                                            <option value="">TRANS Suite 2000</option>
                                                            <option value="">Déjà Vu</option>
                                                            <option value="">Open Language Tools</option>
                                                            <option value="">TransAssist</option>
                                                            <option value="">Heartsome Translation Suite</option>
                                                            <option value="">PageMaker</option>
                                                            <option value="">Wordfast</option>
                                                        </select>
                
                                                       </td>
                                                    </tbody>
                                                </table>
                                            </div>  
                                        </div>
                                        <div class="pt-3">
                                            <p><b>Note</b> Note: Job notifications will be sent according to the software selected on this page.</p>
                                            <!-- <button class="btn btn-danger">Save</button> -->
                                            <!-- <a class="btn btn-danger" style="float: right;" href="button">Save</a> -->
                                            <div class="multiBtn text-center pt-4">
                                                <button class="softcommonBtn">Submit</button>
                                            </div>
                                        </div>
                                        <div class="pt-5">
                                            <table class="table table-responsive">
                                         
                                                <thead>
                                                  <tr>
                                                    <th scope="col-2">No:</th>
                                                    <th scope="col-10">Software type</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td class="col">TransAssist</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td class="col">PageMaker</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td class="col">Wordfast</td>
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
                <div id="files" class="container tab-pane fade">
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="commonDiv">
                                        <h3>Files</h3>
                                        <p class="warning">Upload Your Files</p>
                                        <form action="">
                                            
                                            <div class="control-group">
                                                <div class="controls bootstrap-timepicker">
                                                    <label class="form-label" for="customFile">Upload Your Files</label>
                                                    <input type="file" accept="application/pdf,application/ms-word" class="control " id="customFile" />
                                                </div>
                                            </div>
                
                                            <div class="multiBtn text-center">
                                                <button class="commonBtn">Submit</button>
                                            </div>
                                            <div class="uploadheader">
                                                <h2>Your Uploaded Files</h2>
                                            </div>
                                            <table class="table">
            
                                                <thead>
                                                  <tr>
                                                    <th scope="col-4">No:</th>
                                                    <th scope="col-8">Files</th>
                                                    <!-- <th scope="col"></th>
                                                    <th scope="col"></th> -->
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td class="col-12">User data</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td class="col-12">User data</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td class="col-12">User data</td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                           
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