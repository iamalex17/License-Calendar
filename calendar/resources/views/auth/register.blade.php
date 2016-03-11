@extends('layouts.app')

@section('content')
<div class="container">
    <p class="option">REGISTER TO CALENDAR</p>
    <form class="form-horizontal" action="{{ url('/register') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="full-name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="full-name" placeholder="Full name" required="required">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
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
                <button type="submit" class="btn btn-default">Register</button>
            </div>
        </div>
    </form>
    <div class="register-redirect">
        <p>Already use Calendar?</p>
        <a class="register-button btn btn-danger" href="{{ route('login') }}">SIGN IN</a>
    </div>
</div>
@endsection
