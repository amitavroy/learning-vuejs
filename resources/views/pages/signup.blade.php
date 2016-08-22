@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h1>Create a new account with us.</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <div class="panel panel-default">
            <div class="panel-heading">Sign up form <i class="fa fa-user-plus pull-right"></i></div>
            <div class="panel-body">

                @if(isset ($errors) && count($errors) > 0)
                    <div class="alert alert-danger alert-notification">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- start login form -->
                <form action="{{ url('do-sign-up') }}" method="post" id="sign-up-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Display name</label>
                        <input type="text" name="displayname" placeholder="Enter your Display name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Enter your password again" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary pull-right">
                            <i class="fa fa-user-plus"></i> Sign up
                        </button>
                    </div>
                </form>
                <!-- end login form -->
            </div>
        </div>
    </div>
</div>
@endsection
