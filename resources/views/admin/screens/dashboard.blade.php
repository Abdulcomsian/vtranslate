@extends('admin.layouts.master' ,['page_title' => 'Dasboard'])
@section('content')
<section id="mainSection">
    <div class="multiDiv">
        @include('admin.layouts.sidebar')
        <div class="mainContent">
            <h3 class="title">Users</h3>
            <div class=tabs-div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Freelancers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Agencies</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="freelancerDiv commonDiv">
                        <table id="freelancerTable" class="table-responsive">
                            <thead>
                                <th></th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Type</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($Users as $user)
                                @if($user->user_status=="Translator")
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="@if(isset($user->profile_photo)){{asset('profile-images/').'/'. $user->profile_photo ?? ''}}@else {{ asset('assets/img/img_avatar.png') }}@endif" alt="">
                                    </td>
                                    <td>{{$user->fname ?? ''}} </td>
                                    <td>{{$user->lname ?? ''}}</td>
                                    <td>{{$user->email ?? ''}}</td>
                                    <td>{{getcountryname($user->country_id)}}</td>
                                    <td>{{$user->user_status ?? ''}}</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" onclick="deletefreelancer('{{$user->id}}')"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="freelancerDiv commonDiv">
                        <table id="agencyTable" class="table-responsive">
                            <thead>
                                <th></th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Type</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($Users as $user)
                                @if($user->user_status=="Employer")
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="@if(isset($user->profile_photo)){{asset('profile-images/').'/'. $user->profile_photo ?? ''}}@else {{ asset('assets/img/img_avatar.png') }}@endif" alt="">
                                    </td>
                                    <td>{{$user->fname ?? ''}} </td>
                                    <td>{{$user->lname ?? ''}}</td>
                                    <td>{{$user->email ?? ''}}</td>
                                    <td>{{getcountryname($user->country_id)}}</td>
                                    <td>{{$user->user_status ?? ''}}</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" onclick="deleteagency('{{$user->id}}')"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="freelancerDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('deleteuser')}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Freelancer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you really want to delete this Freelancer
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="freelancerid" name="freelancerid" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Modal -->
<div class="modal fade" id="agencyDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('deleteuser')}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Agency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you really want to delete this Agency
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="agencyid" name="agencyid" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('script')
<script>
    function deletefreelancer(userid) {
        $("#freelancerid").val(userid);
        $("#freelancerDelete").modal('show');
    }

    function deleteagency(userid) {
        $("#agencyid").val(userid);
        $("#agencyDelete").modal('show');
    }
</script>
@endsection