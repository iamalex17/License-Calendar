<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Calendar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{ URL::asset('js/#.js') }}"></script>
        <link href='https://fonts.googleapis.com/css?family=Palanquin:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <p class="option">SIGN IN TO CALENDAR</p>
            <form class="form-horizontal" action="#" method="get">
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Email" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Password" required="required">
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
    </body>
</html>
