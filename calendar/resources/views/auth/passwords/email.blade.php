@extends('layouts.auth')

<!-- Main Content -->
@section('content')
<div class="container container-auth">
    <p class="option">FORGOT YOUR PASSWORD?</p>
    <form class="form-horizontal" method="POST" action="{{ url('/password/email') }}">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label">Email Address</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Send Password Reset Link</button>
            </div>
        </div>
    </form>
    <div class="login-redirect padding">
        <p>Remember your password?</p>
        <a class="register-button btn btn-danger" href="{{ url('/') }}">SIGN IN</a>
    </div>
</div>
@endsection
