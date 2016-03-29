@extends('layouts.auth')

@section('content')
<div class="container container-auth">
    <p class="option">RESET PASSWORD</p>
    <form class="form-horizontal" method="POST" action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label">E-Mail Address</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required="required">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required="required">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password_confirmation" required="required">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Reset Password</button>
            </div>
        </div>
    </form>
</div>
@endsection
