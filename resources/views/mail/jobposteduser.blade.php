@component('mail::message')
<div class="background-color:#454545;">Hello {{$user->fname ." ".$user->lname}}</div><br>
A new job has been posted that matches your expertise, Click on the link below to view and apply for the job.
<hr>
<a href="{{route('job-details',$jobid)}}">Click here</a>
<br>
Thank you for visiting vtranslate

<div style="text-align:center;"><a style="margin-right:10px;color:#F26C20;" href="{{route('home')}}">Vtranslate</a></div>
<div style="margin-top:20px;text-align:center;">
    <a href="https://www.facebook.com/evateachlms/"><img style="width:40px;height:40px;" src="https://tobyo18.sg-host.com/wp-content/uploads/2021/03/fb.png" /></a>
    <a href="https://www.linkedin.com/company/evateach/about/"><img style="width:40px;height:40px;" src="https://tobyo18.sg-host.com/wp-content/uploads/2021/03/linkedin.png" /></a>
    <a href="https://twitter.com/evateach2"><img style="width:40px;height:40px;" src="https://tobyo18.sg-host.com/wp-content/uploads/2021/03/twitter.png" /></a>
    <a href="https://www.instagram.com/_evateach/"><img style="width:40px;height:40px;" src="https://tobyo18.sg-host.com/wp-content/uploads/2021/03/instagram.png" /></a>
</div>
<div style="margin-top:20px;text-align:center;">
    <p style="text-align:center;color:#777;">Suite 2A, Blackthorn House, St Pauls Square,</p>
    <p style="text-align:center;color:#777;">Birmingham. B3 1RL, United Kingdom</p>
</div>
@endcomponent