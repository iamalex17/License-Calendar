<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        @if (Auth::guest())
        <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
        @endif
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        @if (Auth::guest())
        <div class="container">
            <div class="jumbotron">
                <p class="option">WELCOME GUEST</p>
                <p>
                    You tried to access the dashboard. In order to do that please
                    <a href="{{ url('/') }}">Sign in</a>.
                </p>
                <p>New to Calendar?</p>
                <a class="register-button btn btn-danger" href="{{ url('register') }}">REGISTER</a>
            </div>
        </div>
        @else
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        @endif
    </body>
</html>
