@extends('layouts.app')

@section('content')
<form class="col-sm-4" method="post" action="/update-profile">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" value="{{ Auth::user()->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
    </div>
    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" placeholder="New Password">
    </div>
    <p class="notifications">
        Notifications
    </p>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Save</button>
</form>
@endsection
