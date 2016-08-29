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
    mix.sass('app.scss')
        .scripts([
            'libs/jquery-2.1.4.js',
            'libs/bootstrap.js',
            'libs/sweetalert-dev.js',
            'libs/lity.js'
        ], './public/js/libs.js')
        .styles([
            'libs/font-awesome.css',
            'libs/sweetalert.css',
            'libs/lity.css',
        ], './public/css/libs.css')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/**',
        'public/fonts/bootstrap')
        .copy('resources/assets/amcharts/**',
        'public/js/amcharts')
        .copy('resources/assets/fonts/**',
        'public/fonts');
});
