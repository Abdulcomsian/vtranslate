@extends('layouts.master' ,['page_title' => 'Top Freelancer'])
@section('content')
<section id="profileBanner">
    <h3>Top 20 Freelancer</h3>
</section>
<section id="contactDiv" class="sectionMain padd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

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
                                <td class="date">{{date("F-Y", strtotime($freelancer->usergeneralinfo->updated_at ?? ''));}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


            </div>
            <div class="col-lg-3">
                @if($topfreelancer)
                <div class="lookingFor">
                    <p class="header">FREELANCER OF THE DAY</p>
                    <div class="sliderDiv">
                        <div class="profileBox">
                            <img src="@if(isset($topfreelancer->profile_photo) && $topfreelancer->profile_photo!=null){{asset('/profile-images/'.$topfreelancer->profile_photo ?? '')}}@else{{'/assets/img/Job Posted.png'}}@endif" alt="" class="img-fluid">
                            <div class="userDetail">
                                <h5>{{$topfreelancer->fname ?? ''}} {{ $topfreelancer->lname ?? ''}}</h5>
                                <p>Translator</p>
                            </div>
                            <hr>
                            <div class="reviewDiv">
                                <p><img src="assets/img/star.png" alt="" class="img-fluid">{{$topfreelancer->totalreview ?? ''}} Reviews ({{$topfreelancer->avgrate ?? ''}})</p>
                                <p>
                                    <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                    @php
                                    $countryname=\App\Models\Country::where('id',$topfreelancer->country_id)->first();
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
</section>
@endsection