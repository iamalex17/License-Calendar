@extends('layouts.app')

@section('calendar')
<div id="calendar"></div>
@endsection

<div class="modal-account modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Account Settings</h4>
            </div>
            <form method="POST" action="/profile/{{ Auth::user()->id }}">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">Current Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Current Password" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="newPassword" placeholder="New Password" required="required">
                    </div>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" data-target=".modal-delete-account">Delete Account</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-delete-account modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Delete Account</h4>
            </div>
            <form method="POST" action="/profile/{{ Auth::user()->id }}">
                {!! csrf_field() !!}
                {{ method_field('DELETE') }}
                <div class="modal-body">
                    <p>You are about to delete your account, do you wish to continue?</p>
                    <span>This action cannot be undone.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" data-toggle="modal" data-target=".modal-account">No</button>
                    <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div class="modal-settings modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Calendar Settings</h4>
            </div>
            <div class="modal-body">
                <!-- modal content -->
                <p class="notifications">
                    Web Notifications
                </p>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> YES
                    </label>
                </div>
                <p class="notifications">
                    Email Notifications
                </p>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> YES
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}

<div id="createEvent" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Event</h4>
            </div>
            <form action="/event/{{ Auth::user()->id }}" method="POST">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <input type="text" name="title" class="form-control" id="test" placeholder="Event Title" required="required">
                    <input type="text" name="start_date" class="form-control" id='startDate' placeholder="Event Start Date" required="required">
                    <input type="text" name="end_date" class="form-control" id='endDate' placeholder="Event End Date" required="required">
                    <span>Alert</span>
                    <select name="alert" class="selectpicker">
                        <option value="0">At event moment</option>
                        <option value="1">5 minutes before</option>
                        <option value="2">10 minutes before</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Undo</button>
                    <button type="submit" class="btn btn-success">Save event</button>
                </div>
            </form>
        </div>
    </div>
</div>
