const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'resources/assets/css/libs'
    )
    .copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'resources/assets/js/libs'
    )
});

elixir((mix) => {
    mix.sass('app.scss')
    .webpack('app.js')
    .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/**',
    'public/fonts/bootstrap')
    .styles([
        'libs/font-awesome.css',
        'libs/sweetalert.css',
        'libs/lity.css',
        'libs/bootstrap-datepicker.min.css'
       ], './public/css/libs.css')
    .copy('node_modules/amcharts/dist/amcharts/**',
    'public/js/amcharts')
    .copy('resources/assets/fonts/**',
    'public/fonts')
    .scripts([
        'libs/sweetalert-dev.js',
        'libs/lity.js',
        'libs/bootstrap-datepicker.min.js'
    ], './public/js/libs.js');
});
