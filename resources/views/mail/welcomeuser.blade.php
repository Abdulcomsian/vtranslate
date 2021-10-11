@component('mail::message')
<div class="background-color:#454545;">Hello {{$user['fname']}},</div><br>

Welcome to Vtranslate, an online Project platform designed to help you become the best version of yourself, alongside people who share your passions.You are all set to begin.

Here are your sign-in credentials:<br>
Email: {{$user['email']}}

You are receiving this email because we received a signup request for your this mail account.

Once you have signed in, you can access your dashboard and complete your profile.

Don’t know where to begin? Browse our list of featured courses or search for your choice course to get started.

See you soon, <br>
Your Vtranslate team.

<br>
<div style="text-align:center;"><a style="margin-right:10px;color:#F26C20;" href="https://tobyo18.sg-host.com/blogs/">Blog</a><a style="color:#F26C20;" href="https://tobyo18.sg-host.com/contact/">Contact
                us</a></div>
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