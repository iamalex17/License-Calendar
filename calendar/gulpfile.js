var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
  mix.sass([
    'auth.scss',
    'app.scss',
    ], 'public/css/app.css')
    .copy('bower_components/fullcalendar/dist/fullcalendar.min.css', 'public/css/')
    .copy('bower_components/fullcalendar/dist/fullcalendar.min.js', 'public/js/')
    .copy('bower_components/fullcalendar/dist/fullcalendar.print.css', 'public/css/')
    .copy('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 'public/css/')
    .copy('bower_components/bootstrap-select/dist/css/bootstrap-select.min.css', 'public/css')
    .copy('bower_components/jquery/dist/jquery.min.js', 'public/js/')
    .copy('bower_components/moment/min/moment.min.js', 'public/js/')
    .copy('bower_components/moment/min/moment-with-locales.min.js', 'public/js/')
    .copy('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'public/js/')
    .copy('bower_components/bootstrap-select/dist/js/bootstrap-select.min.js', 'public/js');
});
