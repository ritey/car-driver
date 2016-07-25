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
