const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.disableNotifications();
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ])
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/surfboardAnimatie.css', 'public/css')
    .postCss('resources/css/contactgegevensTabel.css', 'public/css');
