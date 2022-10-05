const mix = require('laravel-mix');
require('laravel-mix-purgecss');


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

//mix front
// mix.js('resources/js/common.js', 'public/js')
//    .sass('resources/sass/base.scss', 'public/css', { implementation: require('node-sass') })
//    .sass('resources/sass/content.scss', 'public/css', { implementation: require('node-sass') });

//mix admin
mix.sass('resources/views/admin/scss/base.scss', 'public/backend/css', { implementation: require('node-sass') })
   .sourceMaps()
   .copyDirectory('resources/views/admin/js', 'public/backend/js');
//    .purgeCss({
//         extend: {
//             //extend source for purgecss
//             content: [path.join(__dirname, 'vendor/spatie/menu/**/*.php')]
//         },
//         enabled: true,
//    });


mix.browserSync({
    proxy: 'http://127.0.0.1:1991'
})
