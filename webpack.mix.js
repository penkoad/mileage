let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |^
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('node_modules/font-awesome5/webfonts', 'public/webfonts');
// mix.copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
//         'resources/assets/css/libs'
// )

// mix.copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
//     'resources/assets/js/libs'
// );

// mix.styles([
//     'libs/font-awesome.css',
//     'libs/sweetalert.css',
//     'libs/lity.css',
//     'libs/bootstrap-datepicker.min.css'
// ], './public/css/libs.css');

mix.copy('node_modules/amcharts/dist/amcharts', 'public/amcharts');

// mix.copy('resources/assets/fonts/**',
//     'public/fonts');
//
// mix.scripts([
//     'libs/sweetalert-dev.js',
//     'libs/lity.js',
//     'libs/bootstrap-datepicker.min.js'
// ], './public/js/libs.js');
