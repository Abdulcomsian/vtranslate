@extends('layouts.master' ,['page_title' => 'Login'])
@section('content')
<section id="mainBanner">
    <div class="registerDiv">
        <h2>Login</h2>
        <p>Create a new account with us and start using the most trusted<br>
            platform to provide services.</p>
    </div>
</section>
<section id="createAccount">
    <div class="container">
        <!-- <div class="formDiv"> -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="formDiv">
                            <h2>Login</h2>
                            <div class="inputDiv">
                                <label for="">Email/Username:</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <label for="">Password:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-" style="float:right;padding-right: 0;">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div style="float:left;">
                                        <button class="commonBtn" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <!-- </div> -->
    </div>
</section>
@endsection