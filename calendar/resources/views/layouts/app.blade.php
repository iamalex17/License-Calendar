<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="{{ URL('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL('css/app.css') }}" rel="stylesheet">
        <link href="{{ URL('css/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ URL('css/fullcalendar.print.css') }}" rel="stylesheet" media='print'>
        <link href="{{ URL('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
        <script type="text/javascript" src="{{ URL('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/calendar.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/moment-with-locales.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/bootstrap-datetimepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL('js/fullcalendar.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
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
                            {{-- <li><a href="#"> --}}
                                {{-- <button type="button" class="btn btn-link no-underline" data-toggle="modal" data-target=".modal-settings">Settings</button> --}}
                            {{-- </a> --}}
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

        @include('dashboard.event');
    </body>
</html>
