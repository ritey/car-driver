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

var paths = {
	'custom': './resources/assets/custom/',
	'vendor': './resources/assets/vendor/',
}

elixir(function(mix) {
    mix.copy(paths.custom, 'public/assets/custom/')
    mix.copy(paths.vendor, 'public/assets/vendor/')
});

var paths = {
	'jquery': './node_modules/jquery/',
	'bootstrap': './node_modules/bootstrap-sass/assets/',
	'fontawesome': './node_modules/font-awesome/',
	'dropzone': './node_modules/dropzone/'
}

elixir(function(mix) {

    mix.sass('app.scss', 'public/css/', {

		includePaths: [

			paths.bootstrap + 'stylesheets/',

			paths.fontawesome + 'scss/'

		]

	})

		.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')

		.copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')

		.styles([

			'public/css/app.css',

			'./resources/assets/css/app.css',

			paths.dropzone + 'dist/min/dropzone.min.css'

		], 'public/css/app.css', './')

		.scripts([

			paths.jquery + "dist/jquery.min.js",

			paths.bootstrap + "javascripts/bootstrap.min.js",

			'./resources/assets/javascript/app.js',

			'./resources/assets/javascript/**/*.js',

			paths.dropzone + 'dist/min/dropzone.min.js'

		], 'public/js/app.js', './')

        .version([

			'css/app.css',

			'js/app.js'

		]);

});