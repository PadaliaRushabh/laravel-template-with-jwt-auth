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
    mix.sass('app.scss', 'resources/assets/css/app.css')
        .webpack('app.js')
        .copy('node_modules/jquery-ui-dist/jquery-ui.min.css', 'resources/assets/css/jquery-ui.min.css')
        .copy('node_modules/jquery-confirm/dist/jquery-confirm.min.css', 'resources/assets/css/jquery-confirm.min.css')
        .styles(['jquery-ui.min.css','jquery-confirm.min.css','app.css'], "public/css/app.min.css")
});
