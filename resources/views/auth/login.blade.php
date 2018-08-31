@extends('layouts.auth')

@section('content')
<div class="top_box">
    <h2 class="clearfix">
        <a href="#"><img src="{{ asset('public/images/arr_left.png')}}" class="img-responsive"></a>
        {{ __('Login') }}
    </h2>
</div>
<div class="container">
    <div class="login">
        <div class="login_img">
            <img src="{{ asset('public/images/login.png')}}" class="img-responsive center-block">
        </div>
        <div class="form_box">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="inner_form">
                    <label>User Name/ Email address</label>
                    <input type="email" id="email"  class="mail {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label>Password</label>
                    <input id="password" type="password" class="pass{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input type="submit" class="submit" value="{{ __('Login') }}">
                    <a href="{{ route('register') }}" class="register">Create an Account</a>
                </div>
            </form>
            <a href="{{ route('password.request') }}" class="f_pass"> {{ __('Forgot Your Password?') }}</a>
        </div>
    </div>
</div>
@endsection
