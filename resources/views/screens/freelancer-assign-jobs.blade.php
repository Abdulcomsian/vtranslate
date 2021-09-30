@extends('layouts.master' ,['page_title' => 'Assign Jobs'])
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
                                        <th scope="col">Review</th>
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
                                            <strong>{{job_status($job->status)}}</strong>
                                        </td>
                                        <td>
                                            @if($job->status==4)
                                            <span class="fa fa-star" role="button" onclick="ratefunc('{{$job->id}}','{{$job->user_id}}','{{$job->job_title}}')"></span>
                                            @endif
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
    <!-- rating modal of job -->
    <div class="modal fade" id="ratingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 800px !important;">
            <form method="post" action="{{route('rate-job')}}">
                @csrf
                <input type="hidden" name="job_id" id="jobid" />
                <input type="hidden" name="user_id" id="userid" />
                <input type="hidden" name="job_title" id="jobtitle" />
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Rate This Job</h4>
                        <button type="button btn-success" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Rating Stars Box -->
                        <div class="md-form">
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                    <li class='star selected hover' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="rating" id="ratingstar" value="1" />
                        </div>
                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="comment" name="comment" class="md-textarea form-control" rows="4" required></textarea>
                            <label data-error="wrong" data-success="right" for="form8">Comment</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="background-color:#85bf31;">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    function ratefunc(jobid, userid, jobtitle) {
        $("#jobid").val(jobid);
        $("#userid").val(userid);
        $("#jobtitle").val(jobtitle);
        $("#ratingmodal").modal('show');
    }
</script>

<!-- RATE SCRIPT HERE -->
<script>
    $(document).ready(function() {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function() {
            $(this).parent().children('li.star').each(function(e) {
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            if (ratingValue > 1) {
                $("#ratingstar").val(ratingValue);
            } else {
                $("#ratingstar").val(ratingValue);
            }
        });


    });
</script>
@endsection