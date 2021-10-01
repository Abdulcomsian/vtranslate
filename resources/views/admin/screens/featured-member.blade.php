@extends('admin.layouts.master' ,['page_title' => 'Featured Memebers'])
@section('content')
<section id="mainSection">
    <div class="multiDiv">
        @include('admin.layouts.sidebar')
        <div class="mainContent">
            <h3 class="title">Featured Memebers</h3>
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
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Abdul</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#freelancerDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Toby</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#freelancerDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Areeb</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#freelancerDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Rizwan</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#freelancerDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
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
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Abdul</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#agencyDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Toby</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#agencyDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Areeb</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#agencyDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{ asset('assets/img/img_avatar.png') }}" alt="">
                                    </td>
                                    <td>Rizwan</td>
                                    <td>Basit</td>
                                    <td>abdul.basit@accuralgroup.com</td>
                                    <td>Pakistan</td>
                                    <td>Freelancer</td>
                                    <td>
                                        <!-- <span class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> -->
                                        <span class="delete"><i class="fa fa-trash" data-toggle="modal" data-target="#agencyDelete" aria-hidden="true"></i></span>
                                        <span class="edit"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="agencyDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
@endsection
