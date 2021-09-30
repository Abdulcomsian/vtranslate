@extends('layouts.master' ,['page_title' => 'Search Job'])
@section('css')
<style>
    .dataTables_filter {
        float: right
    }
</style>
@endsection
@section('content')
<section id="profileBanner">
    <h3>My Jobs</h3>
</section>
<section id="findJobSection" class="padd-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="multiCards">
                            <!-- table here -->
                            <table class="table table-striped display" id="jobTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scop="col">Budget</th>
                                        <th scope="col">Job Type</th>
                                        <th scope="col">Job Level</th>
                                        <th scope="col">Job Desc</th>
                                        <th scope="col">Assign To</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($myjobs as $job)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$job->job_title}}</td>
                                        <td>${{$job->budget}}</td>
                                        <td>{{$job->job_type}}</td>
                                        <th>{{$job->job_level}}</th>
                                        <td>{{$job->job_desc}}</td>
                                        <td>
                                            @if($job->job_assign)
                                            <a href="#" role="button" class="assingto" onclick="assignfunc('{{$job->id}}')">{{getUsername($job->job_assign)}}</a>
                                            @else
                                            <a href="#" role="button" class="assingto" onclick="assignfunc('{{$job->id}}')">{{"No Assign"}}</a>
                                            @endif
                                        </td>
                                        <td>{{$job->expiry_date}}</td>
                                        <td>
                                            {{job_status($job->status)}}
                                        </td>
                                        <td>
                                            <span class="fa fa-pencil jobedit" onclick="editfunc('{{$job}}')" data-id="{{$job->id}}" role="button"></span>
                                            <span class="fa fa-trash jobdelete" role="button"></span>
                                            <form class="d-none" method="post" action="{{route('job-delete')}}" id="jobdeleteform">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$job->id}}">

                                            </form>
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
    <!-- edit modal of job -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 800px !important;">
            <form method="post" action="{{route('job-update')}}">
                @csrf
                <input type="hidden" name="id" id="jobeditid" />
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Edit Job</h4>
                        <button type="button btn-primary" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="md-form mb-2">
                            <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="job_title" name="job_title" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="form34">Job Title</label>
                        </div>

                        <div class="md-form mb-2">
                            <i class="fa fa-money prefix grey-text"></i>
                            <input type="number" id="budget" name="budget" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="form29">Price</label>
                        </div>

                        <div class="md-form mb-2">
                            <i class="fa fa-tasks prefix grey-text"></i>
                            <select class="form-control" name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="0">Pending</option>
                                <option value="1"> Approved</option>
                                <option value="2">Assign</option>
                                <option value="4">Completed</option>
                            </select>
                            <label data-error="wrong" data-success="right" for="form29">Status</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="job_desc" name="job_desc" class="md-textarea form-control" rows="4" required></textarea>
                            <label data-error="wrong" data-success="right" for="form8">Description</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>

                </div>
            </form>
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
                        <button type="submit" class="btn btn-primary">Assign To <i class="fa fa-paper-plane-o ml-1"></i></button>
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
    $(".jobdelete").on('click', function() {
        swal.fire({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $("#jobdeleteform").submit(); // submitting the form when user press yes
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    })

    function editfunc(obj) {
        res = JSON.parse(obj);
        $("#job_title").val(res.job_title);
        $("#job_desc").val(res.job_desc);
        $("#budget").val(res.budget);
        $("#status").val(res.status);
        $("#jobeditid").val(res.id);
        $("#modalContactForm").modal('show');
    }

    function assignfunc(id) {
        $("#job_id").val(id);
        $("#assignmodal").modal("show");
    }
</script>
@endsection