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
                                        <p>View Your Profile (Specialization)</p>
                                        <p>Please select your subject areas adn click ot tab to <b>Save</b> Button</p>
                                        <form action="">
                                        
                                            <div class="row">
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Acting and Directing</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Ecology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Public Health Education & Poromotion</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Advertising</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Economics</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Social Psychology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Arespace Engineering</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Education</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Taxicology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Agriculture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Electrical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine (General)</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Agronomy and Crop Science</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Engineering</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medieval and Renaissance Studies</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Aircraft</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Entomology</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Metallurgical Engineering</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Antomy</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Enterpreneurship</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Military Technologies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Animal Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Enviornmental Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Mining & Mineral Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Antropology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Ethnic and Culture Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Mining & Petrolium Technology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Applied Mathematics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Fibre, Textile and Weaving</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Molecular Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Aquaculture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Film & Cinema Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Music</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Archaeology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Finance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Music History & Literature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Architecture</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Fire Protection</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Naval Architecture And Marine Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Art</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Fishing & Fisheries Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Nuclear Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Astronomy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Food Sciences</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Oceanography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Astrophysics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Fornsics Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Oil & Gas Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Atmospheric Sciences and Meterology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Foresty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Optics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Automotive</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Genealogy/Family History Research</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Organic Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Aviation</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">General</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Patent Translaion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Banking & Financial</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Genetics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Petrochemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Bible and Biblical Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Geochemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Petrolium Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Bio Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Geography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Philosophy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Bioengineering and Biomedical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Geology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Photographic Art</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Geophysics and Seismology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Photography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biomedical</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Gerontology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Physical and Theoretical Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biometrics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Health</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Physical Education Teaching and Coaching</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biophysics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Heating, Air Condition and Refrigeration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Physics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biopsycology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">History</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Political Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biostatistics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Hospitality</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Polymer Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Biotechnology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Humanities and Humanistics Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Psychology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Botany</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Information Science and Systems</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Raditions Biology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Broadcast Jouralism</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Internet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Radio Television Broadcasting</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Buildings</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Islamic Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Religion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Business Adminitration and Management</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Journalism and Mass Communication</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Religion and Religious Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Busines General</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Law and Legal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Science (General)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Business Marketing</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Liguistics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Sociology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Cartography</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Literature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Software Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Ceramics Arts and Ceramics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Manufacturing (Metal Working and Product, Instruments, Funiture, Printing, Clothing, etc)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Sport and Fitness</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Chemical Technology and Related Industries</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Marine and Aquatics Biology</label>
                                                    </div>
                                                </div>
                                            
                                            <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Taxation</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Chemistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Mathematics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Telecommuincations</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Child Care</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Mechanical Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Textiles Sciences and Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Civil Engineering</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Acupuncture and Oriental Medicine</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Theatre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Computer and Information Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Dentistry</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Theology and Theological Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Computer Engineering</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Medical Technology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Theology and Methematical Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Computer Games and Gambling, Electronic Games, Games of Chance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Medicine - Microbology and Bacterioloy</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
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
                                                <button class="commonBtn">Submit</button>
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
                 <div id="software" class="container tab-pane fade">   
                    <div id="contactDiv" class="padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="commonDiv">
                                        <h3>Software</h3>
                                        <p>View Your Profile (Specialization)</p>
                                        <p>Please select your subject areas adn click ot tab to <b>Save</b> Button</p>
                                        <form action="">
                                        
                                            <div class="row">
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Across</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">IBM TranslationManager</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">PASSOLO</label>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
                                                        <label for="">Adobe Acrobt</label>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4 ">
                                                    <div class="checkBox-Div">
                                                        <input type="checkbox">
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
                                                            <input type="checkbox">
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
                                        <form action="">
                                            <p><b>Upload File</b></p>
                                            <div class="inputDiv">
                                                <label for="">File Title:</label>
                                                <div class="inputSpan">
                                                    <input type="text" name="" id="">
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">File:</label>
                                                <div class="inputSpan">
                                                    <input type="file" name="" id="">
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Purpose:</label>
                                                <div class="inputSpan">
                                                    <select name="" id="">
                                                        <option value="Resumes File">Resumes File</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Language:</label>
                                                <div class="inputSpan">
                                                    <select name="" id="">
                                                        <option value="Resumes File">Language</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="inputDiv">
                                                <label for="">Comments:</label>
                                                <div class="inputSpan">
                                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <p><b>Instruction :</b></p>
                                            <ul>
                                                <li>Files Must be less than <b>1,024</b> KB.</li>
                                                <li>Non-Latin and accented character are not accepted in file names.</li>
                                                <li>Please select the language of the file content. do not select the language if the content is language-neutral, for example for images files.</li>
                                                <li>You can enter Optional File title and comments on the file in any language.</li>
                                                <li>Link to your Uploaded resume files along with the title and comments will be automatically shown under your resume on your profile page (Background)
                                                    <b>only if you submitted your resume in HTML or text-only format. If your resume is absent, </b>
                                                </li>
                                            </ul>
                                           
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