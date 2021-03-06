const mix = require('laravel-mix');

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

mix.browserSync('localhost/thelux/public');

mix.setResourceRoot('../');

mix.js('resources/js/scripts.js', 'public/js');

mix.scripts([
    'resources/js/lib/visible.js',
    'resources/js/lib/menuzord.js',
    'resources/js/lib/jquery.nav.js',
    'resources/js/lib/wow.min.js',
    'resources/js/lib/owl.carousel.min.js',
    'resources/js/lib/smooth.js',
    'resources/js/lib/bootstrap-filestyle.min.js',
    'resources/js/lib/jquery.ui.touch-punch.min.js',
    'resources/js/lib/jquery.fixedheadertable.js',
], 'public/js/vendor.js');

mix.sass('resources/sass/landing.scss', 'public/css') .options({
    processCssUrls: false
});
mix.copyDirectory('resources/img/', 'public/images');

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css') .options({
    processCssUrls: false
});
