<section id="dashboard-header">
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
                                <p><b>{{auth::user()->fname ?? ''}} {{auth::user()->lname ?? ''}}</b></p>
                            </div>
                            <div class="dropDown">
                                <ul>
                                    <li>
                                        <a class="nav-link loginLink" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>