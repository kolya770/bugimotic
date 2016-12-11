const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(function(mix) {

    mix

        .scripts(
            [
                'libraries/jquery-1.12.4.min.js',
                'libraries/bootstrap.min.js',
                'libraries/summernote.min.js',
                'form.js',
                'app.js'
            ],

            'public/js/main.js'
        )

        .styles (
            [
                'libraries/bootstrap.min.css',
                // 'libraries/bootstrap-theme.min.css',
                'libraries/font-awesome.min.css',
                'libraries/summernote.css',
                // 'libraries/lg-fb-comment-box.css',
                // 'libraries/lg-transitions.css',
                // 'libraries/lightgallery.css',
                'app.css'
            ],

            'public/css/main.css'
        )
        .sass(['app.scss'], 'resources/assets/css/app.css')
});