@extends('layouts.auth')
@section('content')
<form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
    <div class="panel periodic-login">
        <!--<span class="atomic-number">10</span>-->
        <div class="panel-body text-center">
            <h3 class="atomic-symbol">RF</h3>
            <!--<p class="atomic-mass">14.072110</p>-->
            <p class="element-name">{{ config('app.name', 'Laravel') }}</p>
            <i class="icons icon-arrow-down"></i>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} form-animate-text" style="margin-top:0px !important;">
                <input type="email" name="email" class="form-text" value="{{ old('email') }}" autofocus required>
                <span class="bar"></span>
                <label>Email</label>
                @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} form-animate-text" style="margin-top:20px !important;">
                <input type="password" name="password" class="form-text" required>
                <span class="bar"></span>
                <label>Password</label>
                @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <label class="pull-left">
            <input type="checkbox" class="icheck pull-left" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
            <input type="submit" class="btn col-md-12" value="SignIn"/>
        </div>
        <div class="text-center" style="padding:5px;">
            <a href="{{ url('/password/reset') }}">Forgot Password </a>
            <a href="{{ url('/register') }}">| Signup</a>
        </div>
    </div>
</form>
@endsection
