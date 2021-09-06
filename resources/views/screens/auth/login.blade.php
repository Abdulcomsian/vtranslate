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
            <div class="formDiv">
                <form action="">
                    <h2>Login</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputDiv">
                                    <label for="">User Name</label>
                                    <input type="text" name="" id="" placeholder="Enter User Name">
                                </div>
                                <div class="inputDiv">
                                    <label for="">Password</label>
                                    <input type="password" name="" id="" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="rebootDiv">
                                    <img src="assets/img/image 1.png" alt="" class="img-fluid">
                                </div>
                                <button class="commonBtn">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection