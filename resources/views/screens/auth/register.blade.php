@extends('layouts.master' ,['page_title' => 'Register'])
@section('content')
<section id="mainBanner">
        <div class="registerDiv">
            <h2>Register</h2>
            <p>Create a new account with us and start using the most trusted<br>
                platform to provide services.</p>
        </div>
    </section>
    <section id="createAccount">
        <div class="container">
            <div class="formDiv">
                <form action="">
                    <h2>Create Account</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">First Name <span>*</span></label>
                                    <input type="text" name="" id="" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Last Name <span>*</span></label>
                                    <input type="text" name="" id="" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Country <span>*</span></label>
                                    <select name="" id="">
                                        <option value="Select Your Country">Select Your Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Postal (ZIP) Code</label>
                                    <input type="text" name="" id="" placeholder="Enter Area Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="text" name="" id="" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">User Name <span>*</span></label>
                                    <input type="text" name="" id="" placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Password <span>*</span></label>
                                    <input type="password" name="" id="" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">Confirm Password <span>*</span></label>
                                    <input type="password" name="" id="" placeholder="Enter Password">
                                </div>
                            </div>
                            </div>
                            
                            <div class="checkBoxDiv">
                                <input type="checkbox" name="" id="" >
                                <label for="">Can we send you job notifications, news and updates about WeTranslate.com?</label>
                            </div>
                            <div class="checkBoxDiv">
                                <input type="checkbox" name="" id="" >
                                <label for="">I have read and accept User Registration Rules and Terms and Conditions.</label>
                            </div>
                            <div class="rebootDiv">
                                <img src="assets/img/image 1.png" alt="" class="img-fluid">
                            </div>
                            <a class="commonBtn" href="profile.html">Register</a>
                            <!-- <button class="commonBtn"></button> -->
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection