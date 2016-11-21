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
    mix.sass('app.scss')
    .webpack('app.js')
    .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/**',
    'public/fonts/bootstrap')
    .styles([
        'libs/font-awesome.css',
        'libs/sweetalert.css',
        'libs/lity.css',
       ], './public/css/libs.css')
    .copy('node_modules/amcharts/dist/amcharts/**',
    'public/js/amcharts')
    .copy('resources/assets/fonts/**',
    'public/fonts')
    .scripts([
        'libs/sweetalert-dev.js',
        'libs/lity.js'
    ], './public/js/libs.js');
});
