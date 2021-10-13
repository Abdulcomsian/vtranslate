<section id="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/home')}}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Freelancer</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('search-freelancer') }}">Search Freelancer</a>
                            <a class="dropdown-item" href="{{ url('top-freelancer') }}">Top 20</a>
                            <a class="dropdown-item" href="{{url('/favourite-job')}}">My Favourite</a>
                            <a class="dropdown-item" href="{{url('/my-assign-jobs')}}">My Assign Jobs</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Agencies</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('search-agencies') }}">Search agencies</a>
                            <a class="dropdown-item" href="{{ url('top-agencies') }}">Top 20</a>
                            <a class="dropdown-item" href="{{ url('my-job') }}">My Jobs</a>
                            <a class="dropdown-item" href="{{route('post-a-job')}}">Post A Job</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('forums') }}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link loginLink" href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item">
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="@if(auth::user()->profile_photo){{asset('profile-images/').'/'. auth::user()->profile_photo}}@else{{ 'https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg'}}@endif" width="40" height="40" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a><span class="fa fa-user"></span> <strong>{{auth::user()->fname.' '.auth::user()->lname}}</strong></a>
                                        <a>({{auth::user()->user_status}})</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{ route('profile') }}"><span class="fa fa-eye"></span> view Profile </a>
                                        <a class="dropdown-item" href="{{ url('user/profile') }}"><span class="fa fa-pencil"></span> Edit Profile </a>
                                        <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </li>
                    @endauth
                    @auth
                    <!-- <li class="nav-item">
                        <a class="nav-link loginLink" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li> -->
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Join Now</a>
                    </li>
                    @endguest
                    <!-- <li class="nav-item">
                        <select name="" id="" class="language">
                            <option value="ENG">ENG</option>
                        </select>
                    </li> -->
                    <li class="nav-item">
                        <i class="fa fa-search searchBtn" aria-hidden="true"></i>
                    </li>
                </ul>

                <div class="searchInput">
                    <input type="search" placeholder="Search">
                </div>
            </div>
        </nav>
    </div>
</section>