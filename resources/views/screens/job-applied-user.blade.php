@extends('layouts.master' ,['page_title' => 'Search Job'])
@section('css')
<style>
    .dataTables_filter {
        float: right
    }

    /* Rating Star Widgets Style */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;

        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 2.5em;
        /* Change the size of the stars */
        color: #ccc;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: #FFCC36;
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #FF912C;
    }

    .paginate_button {
        padding: 5px !important;
    }
</style>
@endsection
@section('content')
<section id="profileBanner">
    <h3>Job Applied Users</h3>
</section>
<section id="findJobSection" class="padd-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="multiCards">
                            <!-- table here -->
                            <table class="table table-striped display table-responsive" id="jobTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scop="col">Email</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Job title</th>
                                        <th scope="col">Job Desc</th>
                                        <th scope="col">Job Type</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($job_applied_user as $user)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td><img src="{{asset('profile-images').'/'.$user->user->profile_photo}}" width="100px" height="100px" class="img img-circle" /></td>
                                        <td>{{$user->user->fname ?? '' }} {{$user->user->lname ?? ''}}</td>
                                        <td>{{$user->user->email ?? '' }} </td>
                                        <td>{{getcountryname($user->user->country_id)}}</td>
                                        <td>{{$user->job->job_title ?? ''}}</td>
                                        <td>{{$user->job->job_desc ?? ''}}</td>
                                        <td>{{$user->job->job_type ?? ''}}</td>
                                        <td>@if($user->job->job_assign)
                                            <a href="#" class="btn btn-primary" style="font-size:10px" role="button" class="assingto" onclick="assignfunc('{{$user->job->id}}')">{{getUsername($user->job->job_assign)}}</a>
                                            @else
                                            <a href="#" role="button" class=" btn btn-primary assingto" style="font-size:10px" onclick="assignfunc('{{$user->job->id}}')">{{"Assign Job"}}</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal fo assign to -->
    <div class="modal fade" id="assignmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 800px !important;">
            <form method="post" action="{{route('job-assignto')}}">
                @csrf
                <input type="hidden" name="job_id" id="job_id" />
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Assign Job</h4>
                        <button type="button btn-primary" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="md-form mb-2">
                            <i class="fa fa-tasks prefix grey-text"></i>
                            <select class="form-control" name="freelancer" id="freelancer" required>
                                <option value="">Select Freelancer</option>
                                @php $freelancers=\App\Models\User::where('user_status','Translator')->get();@endphp
                                @foreach($freelancers as $freelancer)
                                <option value="{{$freelancer->id}}">{{$freelancer->fname ?? ''}}</option>
                                @endforeach
                            </select>
                            <label data-error="wrong" data-success="right" for="form29">Freelancer</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="background-color:#85bf31;">Assign To <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#jobTable').DataTable();
    });

    function assignfunc(id) {
        $("#job_id").val(id);
        $("#assignmodal").modal("show");
    }
</script>
@endsection