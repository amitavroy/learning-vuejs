@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h1>Welcome my Learning Vue.js app</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <div class="panel panel-default">
            <div class="panel-heading">Login form <i class="fa fa-user pull-right"></i></div>
            <div class="panel-body">
                <!-- start login form -->
                <form action="{{ url('do-login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter your username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> Login
                        </button>
                        <div class="pull-right">
                            <a href="">Forgot password</a>
                        </div>
                    </div>
                </form>
                <!-- end login form -->
            </div>
        </div>
        <div>
            <a href="{{ url('sign-up') }}" class="btn btn-lg btn-success btn-block">I don't have an account. Sign up</a>
        </div>
    </div>
</div>
@endsection
