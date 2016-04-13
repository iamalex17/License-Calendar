<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ URL('assets/calendar/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ URL('assets/calendar/fullcalendar.print.css') }}" rel="stylesheet" media='print'>
        <script type="text/javascript" src="{{ URL('assets/jquery.min.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ URL('assets/calendar.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('assets/calendar/fullcalendar.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                <button type="button" class="btn btn-link no-underline" data-toggle="modal" data-target=".modal-account">Account</button>
                            </a>
                            </li>
                            <li><a href="#">
                                <button type="button" class="btn btn-link no-underline" data-toggle="modal" data-target=".modal-settings">Settings</button>
                            </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('calendar')
        @yield('account')
        @yield('delete-account')
        @yield('settings')
    </body>
</html>
