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

var bpath = 'node_modules/bootstrap-sass/assets';
var jqueryPath = 'resources/assets/vendor/jquery';

elixir(function (mix) {
  mix.sass([
            'auth.scss',
            'app.scss',
        ], 'public/assets/css/app.css')
     .copy('bower_components/fullcalendar/dist/fullcalendar.min.css', 'public/assets/calendar/')
     .copy('bower_components/fullcalendar/dist/fullcalendar.min.js', 'public/assets/calendar/')
     .copy('bower_components/fullcalendar/dist/fullcalendar.print.css', 'public/assets/calendar/')
     .copy('bower_components/jquery/dist/jquery.min.js', 'public/assets/')
     .copy('bower_components/moment/min/moment.min.js', 'public/assets/');
});
