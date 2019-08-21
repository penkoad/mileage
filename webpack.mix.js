let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
if (!mix.inProduction()) {
    mix.webpackConfig({devtool: 'inline-source-map'})
}

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// We move datepicker plugin to assets dir for further minification
mix.copy('node_modules/gijgo/css/gijgo.css',
        'resources/css/libs'
).copy('node_modules/gijgo/js/gijgo.js',
    'resources/js/libs'
);

mix.copy('node_modules/sweetalert2/dist/sweetalert2.css',
    'resources/css/libs'
).copy('node_modules/sweetalert2/dist/sweetalert2.all.js',
    'resources/js/libs'
);

// Copy directly fonts from node_modules to public
mix.copy('node_modules/gijgo/fonts/*',
    'public/fonts/'
);

mix.styles([
    'resources/css/libs/.css',
    'resources/css/libs/lity.css',
    'resources/css/libs/gijgo.css'
    ],
    'public/css/libs.css'
);

// copy image dir in amcharts public directory (50 files)
mix.copy(
    'node_modules/amcharts3/amcharts/images',
    'public/amcharts/images'
);

// Combine css and js
mix.styles([
    'resources/css/libs/sweetalert2.css',
    'resources/css/libs/lity.css',
    'resources/css/libs/gijgo.css'
], 'public/css/libs.css');

mix.scripts([
    'resources/js/libs/sweetalert2.all.js',
    'resources/js/libs/lity.js',
    'resources/js/libs/gijgo.js'
    ],
    'public/js/libs.js'
);
