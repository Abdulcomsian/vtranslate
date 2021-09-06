@extends('layouts.master' ,['page_title' => 'Top Freelancer'])
@section('content')
<section id="profileBanner">
        <h3>Top 20 Freelancer</h3>
    </section>
    <section id="contactDiv" class="sectionMain padd-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                   
                   <div class="table-responsive">
                    <table class="table">
                        
                        <thead class="tablehead">
                          <tr>
                            <th scope="col">Select</th>
                            <th scope="col">Freelancer</th>
                            <th scope="col">Location</th>
                            <th scope="col">Last Updated</th>
                            <th scope="col">To Jobs, if any</th>
                            <th scope="col">Send Resume</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>

                          <tr class="tablebackground">
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>

                          <tr>
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>

                          <tr class="tablebackground">
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                        </tr>

                          <tr>
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>

                          <tr class="tablebackground">
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>

                          <tr>
                            <td class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="companyimg">
                                <h3>lorem ipsum</h3>
                                <img src="/assets/img/Job Posted.png" alt="">
                            </td>
                            <td class="location">ABC</td>
                            <td class="date">Jan 01, 2021</td>
                            <td></td>
                            <td></td>
                          </tr>
                         
                        </tbody>
                        
                    </table>
                   </div>
                   
                    
                </div>
                <div class="col-lg-3">
                    <div class="lookingFor">
                        <p class="header">FREELANCER OF THE DAY</p>
                        <div class="sliderDiv">
                            <div class="profileBox">
                                <img src="assets/img/user.png" alt="" class="img-fluid">
                                <div class="userDetail">
                                    <h5>John Doe</h5>
                                    <p>Spanish Translator</p>
                                </div>
                                <hr>
                                <div class="reviewDiv">
                                    <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 Reviews (5.0)</p>
                                    <p>
                                        <img src="assets/img/arrow.png" alt="" class="img-fluid"> Spain
                                    </p>
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