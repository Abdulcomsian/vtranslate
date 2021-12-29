@extends('layouts.master' ,['page_title' => 'Freelancer'])
@section('content')
<section id="profileBanner">
    <h3>Search Freelancer</h3>
</section>
<section id="contactDiv" class="sectionMain padd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commonDiv">
                    <h3>Search Freelancer</h3>
                    <form action="{{route('search-freelancer')}}" method="post">
                        @csrf
                        <!-- <div class="inputDiv">
                            <label for="">Freelancer</label>
                            <input class="form-control" name="name" id="name" placeholder="Enter Freelancer Name" />
                            <select name="freelancerid" id="freelancerid" required>
                                <option value="">Select Freelancer</option>
                                @foreach($allafreelancermembers as $freelance)
                                <option value="{{$freelance->id}}">{{$freelance->fname .' '.$freelance->lname}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="inputDiv">
                            <label for="">Keywords:</label>
                            <input type="text" class="form-control" name="keyword" id="keyword">
                        </div> -->
                        <div class="inputDiv">
                            <label for="">Select Source – Language:</label>
                            <select id="slanguages" name="slanguages" class="form-control">
                                <option value="">Source Language</option>
                                @foreach($worldlang as $lang)
                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputDiv">
                            <label for=""> Target- Language:</label>
                            <select id="tlanguages" name="tlanguages" class="form-control">
                                <option value="">Select Target Language</option>
                                @foreach($worldlang as $lang)
                                <option value="{{$lang['code']}}">{{$lang['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="checkboxh ">
                            <input type="checkbox" class="form-check-input" name="last30" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Freelancer profile updated during the last 30 days</label>
                        </div> -->
                        <div class="inputDiv pt-3">
                            <label for="">Location:</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Select Location</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="multiBtn text-center pt-5">
                            <button type="submit" class="agencycommonBtn">Submit</button>
                        </div>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <div class="sectionp ">
                            <p>Total Records: {{count($FreelancerData)}}</p>

                        </div>
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
                            @foreach($FreelancerData as $freelancer)
                            <tr>
                                <td class="checkbox">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td class="companyimg">
                                    <a href="{{route('public-profile',$freelancer->id)}}">
                                        <strong>{{$freelancer->fname.' '.$freelancer->lname}}</strong>
                                    </a>
                                    <br>
                                    <img src="@if($freelancer->profile_photo!=null){{asset('/profile-images').'/'.$freelancer->profile_photo}} @else{{'/assets/img/Job Posted.png'}}@endif" alt="" class="img-circle img-responsive " width="60px" height="60px">
                                </td>
                                <td class="location">{{$freelancer->usergeneralinfo->address ?? ''}}</td>
                                <td class="date">
                                    <p>{{date("F-Y", strtotime($freelancer->usergeneralinfo->updated_at ?? ''));}}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

                <section class="orderdisplaying">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="lasttitle"><strong>Order of displaying:</strong> (1) Master membership of agency owners, (2) number of jobs posted on the site by agency owners, (3) translators' rating, and (4) agency name.</p>
                            </div>
                            <div class="col-md-12 pt-4 agencies">
                                <p><strong>To add to the My Agencies List,</strong> check agencies and click or tap the Update. When you send your application to an agency, this agency will be automatically added to your My Agencies List. Please note that the maximum number of agencies in the My Agencies List is 200. To go to the personal list of agencies that helps you keep track of your applications, please click or tap My Agencies List.</p>
                                <div class="form-btn pb-3">
                                    <button type="submit" class="agenciesBtn">Submit</button>
                                </div>
                            </div>



                        </div>

                    </div>
                </section>
                <div class="downloadFile">
                    <p>Download all found records as a CSV file. </p>
                    <button class="commonBtn">Download</button>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="rightDiv">
                    @if($topagency)
                    <div class="lookingFor">
                        <p class="header">AGENCY OF THE DAY
                        </p>
                        <div class="sliderDiv">
                            <div class="profileBox">
                                <img src="@if(isset($topagency->profile_photo) && $topagency->profile_photo!=null){{asset('/profile-images/'.$topagency->profile_photo ?? '')}}@else{{'/assets/img/Job Posted.png'}}@endif" alt="" class="img-fluid">
                                <div class="userDetail ml-2">
                                    <h5>{{$topagency->fname ?? ''}} {{ $topagency->lname ?? ''}}</h5>
                                    <p>Agency</p>
                                </div>
                                <hr>
                                <div class="reviewDiv ml-2">
                                    <p><img src="assets/img/star.png" alt="" class="img-fluid">{{$topagency->totalreview ?? ''}} Reviews ({{$topagency->avgrate ?? ''}})</p>
                                    <p>
                                        <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                        @php
                                        $countryname=\App\Models\Country::where('id',$topagency->country_id)->first();
                                        @endphp
                                        {{$countryname->country_name ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>


    </div>
</section>
@endsection