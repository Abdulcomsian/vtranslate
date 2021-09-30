@extends('layouts.master' ,['page_title' => 'Assign Jobs'])
@section('css')
<style>
    .dataTables_filter {
        float: right
    }
</style>
@endsection
@section('content')
<section id="profileBanner">
    <h3>My Assign Jobs</h3>
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
                                        <th scope="col">Assign</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Status</th>
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
                                            <strong>{{getUsername($job->job_assign)}}</strong>
                                            @endif
                                        </td>
                                        <td>{{$job->expiry_date}}</td>
                                        <td>
                                            <a href="#" onclick="changesatus('{{$job->id}}')">{{job_status($job->status)}}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $myjobs->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal fo assign to -->
    <div class="modal fade" id="changstatusmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 800px !important;">
            <form>
                <input type="hidden" name="job_id" id="job_id" />
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Change Status</h4>
                        <button type="button btn-primary" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="md-form mb-2">
                            <i class="fa fa-tasks prefix grey-text"></i>
                            <select class="form-control" name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="4">Completed</option>
                            </select>
                            <label data-error="wrong" data-success="right" for="form29">Status</label>
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
    function changesatus(id) {
        $("#job_id").val(id);
        $("#changstatusmodal").modal("show");
    }
</script>
@endsection