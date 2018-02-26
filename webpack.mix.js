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
// Front End
mix.scripts([
		'vendor/starto/front/js/jquery.easing.1.3.min.js',
		'vendor/starto/front/js/wow.min.js',
		'vendor/starto/front/js/jquery.app.js'
	],'public/js/app.js');
// Javascript
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','public/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.js','public/js/jquery.js');

// CSS
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','public/css/bootstrap.min.css');
mix.styles([
	'vendor/starto/front/css/animate.css',
	'vendor/starto/front/css/material-design-iconic-font.min.css',
	'vendor/starto/front/css/style.css',
	'vendor/starto/front/css/colors/red.css',
	],'public/css/core.css');

mix.copyDirectory('vendor/starto/front/images','public/images');
mix.sass('resources/assets/sass/app.scss', 'public/css').version();

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
