@extends('layouts.app')
@section('content')
<div class="card-body">
    <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="POST">
        @csrf
        <a href="javascript:void(0)" class="text-center db">{{ config('app.name') }}</a>
        <div class="form-group m-t-40">
            <div class="col-xs-12">
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="customCheck1" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>

                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> 
                </div>     
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a>
            </div>
        </div>
    </form>
    <form class="form-horizontal" id="recoverform" action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection

