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
    mix.sass('app.scss', 'resources/assets/css/app.min.css')
        .webpack('app.js')
        .browserify('main.js')
        .copy('node_modules/jquery-ui-dist/jquery-ui.min.css', 'resources/assets/css/jquery-ui.min.css')
        .styles(['jquery-ui.min.css', 'app.min.css'], "public/css/app.css")
});
