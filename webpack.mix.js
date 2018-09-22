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
if (!mix.inProduction()) {
    mix.webpackConfig({devtool: 'inline-source-map'})
}

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

// We move datepicker plugin to assets dir for further minification
mix.copy('node_modules/gijgo/css/gijgo.css',
        'resources/assets/css/libs'
).copy('node_modules/gijgo/js/gijgo.js',
    'resources/assets/js/libs'
);

// Copy directly fonts from node_modules to public
mix.copy('node_modules/gijgo/fonts/*',
    'public/fonts/'
);

// Combine css and js
mix.styles([
    'resources/assets/css/libs/sweetalert.css',
    'resources/assets/css/libs/lity.css',
    'resources/assets/css/libs/gijgo.css'
], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/sweetalert-dev.js',
    'resources/assets/js/libs/lity.js',
    'resources/assets/js/libs/gijgo.js'
], 'public/js/libs.js');

mix.copy('node_modules/amcharts3/amcharts', 'public/amcharts');
