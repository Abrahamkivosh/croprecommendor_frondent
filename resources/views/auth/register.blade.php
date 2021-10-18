@extends('layouts.app')


@section('content')
    <div class="card-body">
        <form class="form-horizontal form-material" id="loginform" action="{{ route('register') }}" method="POST" >
            @csrf
            <a href="/" class="text-center db">{{config('app.name')}}</a>
            <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
            <div class="form-group m-t-20">
                <div class="col-xs-12">
                    <input id="name" placeholder="User Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input id="email" placeholder="Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input id="password" type="password" placeholder="Strong Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
           
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign
                        Up</button>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>
        </form>
    </div>
@endsection
