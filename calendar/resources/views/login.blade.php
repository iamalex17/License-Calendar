@extends('layouts.app')

@section('content')
<div class="container">
    <p class="option">SIGN IN TO CALENDAR</p>
    <form class="form-horizontal" action="{{ url('/login') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
        </div>
    </form>
    <div class="login-redirect">
        <p>New to Calendar?</p>
        <a class="register-button btn btn-danger" href="{{ route('register') }}">REGISTER</a>
    </div>
</div>
@endsection
