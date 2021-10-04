<section id="dashboard-header" >
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/home')}}">
                <img src="assets/img/logo.png" alt="" class="img-fluid">
            </a>

            <div class="dashboard-header-right">
                <ul>
                    <li>
                        <div class="profileDiv">
                            <div class="profileImage">
                                <img src="{{ asset('assets/img/user.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="userInfo">
                                <p>Welcome Back,</p>
                                <p><b>Abdul Basit</b></p>
                            </div>
                            <div class="dropDown">
                                <ul>
                                    <li>
                                        <a href="">Setting</a>
                                    </li>
                                    <li>
                                        <a href="">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
                <!-- <ul class="navbar-nav mt-2 mt-lg-0">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/profile') }}">Profile</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link loginLink" href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item">
                        <a class="nav-link loginLink" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Join Now</a>
                    </li>
                    @endguest
                    <li class="nav-item">
                        <select name="" id="" class="language">
                            <option value="ENG">ENG</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </li>
                </ul> -->
        </nav>
    </div>
</section>