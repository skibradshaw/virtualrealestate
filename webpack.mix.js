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
	],'public/js/frontapp.js');
// Frontend Javascript
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','public/js/bootstrap.min.js');

// Backend Plugins Javascript
mix.scripts([
	'vendor/starto/back/plugins/morris/morris.min.js',
	'vendor/starto/back/plugins/raphael/raphael-min.js',
	'vendor/starto/back/plugins/waypoints/lib/jquery.waypoints.js',
	'vendor/starto/back/plugins/counterup/jquery.counterup.min.js',
	'vendor/starto/back/plugins/counterup/jquery.counterup.min.js',
	'node_modules/moment/min/moment.min.js',
	'node_modules/fullcalendar/dist/fullcalendar.min.js',
	],'public/js/backplugins.js');

// Backend Javascript
// mix.scripts([
// 		'vendor/starto/back/js/jquery.core.js',
// 		'vendor/starto/back/js/jquery.app.js',
// 	],'public/js/backapp.js');
mix.copy('vendor/starto/back/js/jquery.core.js','public/js/jquery.core.js');
mix.copy('vendor/starto/back/js/jquery.app.js','public/js/jquery.app.js');
// mix.copy('vendor/starto/back/pages/jquery.dashboard.js','public/js/jquery.dashboard.js');

// JQUERY
mix.copy('node_modules/jquery/dist/jquery.js','public/js/jquery.js');
mix.copy('vendor/starto/back/js/modernizr.min.js','public/js/modernizr.min.js');
mix.copy('vendor/starto/back/js/detect.js','public/js/detect.js');
mix.copy('vendor/starto/back/js/fastclick.js','public/js/fastclick.js');
mix.copy('vendor/starto/back/js/jquery.slimscroll.js','public/js/jquery.slimscroll.js');
mix.copy('vendor/starto/back/js/jquery.blockUI.js','public/js/jquery.blockUI.js');
mix.copy('vendor/starto/back/js/waves.js','public/js/waves.js');
mix.copy('vendor/starto/back/js/wow.min.js','public/js/wow.min.js');
mix.copy('vendor/starto/back/js/jquery.nicescroll.js','public/js/jquery.nicescroll.js');
mix.copy('vendor/starto/back/js/jquery.scrollTo.min.js','public/js/jquery.scrollTo.min.js');



// CSS
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','public/css/bootstrap.min.css');
mix.styles([
	'vendor/starto/back/plugins/morris/morris.css',
	'node_modules/fullcalendar/dist/fullcalendar.min.css',
	],'public/css/plugins.css');

mix.styles([
	'vendor/starto/front/css/animate.css',
	'vendor/starto/front/css/material-design-iconic-font.min.css',
	'vendor/starto/front/css/style.css',
	'vendor/starto/front/css/colors/red.css',
	],'public/css/front.css');

mix.styles([
	'vendor/starto/back/css/menu_light.css',
	'vendor/starto/back/css/core.css',
	'vendor/starto/back/css/components.css',
	'vendor/starto/back/css/icons.css',
	'vendor/starto/back/css/pages.css',
	'vendor/starto/back/css/responsive.css',
	],'public/css/back.css');

mix.copyDirectory('vendor/starto/front/images','public/images');
mix.copyDirectory('vendor/starto/back/images','public/images');
mix.copyDirectory('vendor/starto/back/fonts','public/fonts');
mix.sass('resources/assets/sass/app.scss', 'public/css').version();

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
