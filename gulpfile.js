var elixir = require('laravel-elixir');

var config = {
    bowerDir : '../../../bower_components/'
}

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
    mix.sass('app.scss');

    //STYLES FOR THE BACKEND
    mix.styles([
        config.bowerDir + 'bootstrap/dist/css/bootstrap.min.css',
        config.bowerDir + 'font-awesome/css/font-awesome.min.css',
        config.bowerDir + 'Ionicons/css/ionicons.min.css',
        config.bowerDir + 'AdminLTE/dist/css/AdminLTE.min.css',
        config.bowerDir + 'AdminLTE/dist/css/skins/skin-red.min.css',
        config.bowerDir + 'trumbowyg/dist/ui/trumbowyg.min.css',
        config.bowerDir + 'bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
    ], 'public/css/admin.css');
    
    /*
    * You can put here the styles and scripts for the front end
    *
    * Assume that the assets for front end is in /resources/assets/css
    * eg. mix.styles(['front.css'], 'public/css/front.css');
    */
    mix.styles([
        config.bowerDir + 'bootstrap/dist/css/bootstrap.min.css',
        'front.css'
    ], 'public/css/front.css');

    //SCRIPTS FOR THE BACKEND
    mix.scripts([
        config.bowerDir + 'jquery/dist/jquery.min.js',
        config.bowerDir + 'bootstrap/dist/js/bootstrap.min.js',
        config.bowerDir + 'slimscroll/jquery.slimscroll.min.js',
        config.bowerDir + 'fastclick/lib/fastclick.js',
        config.bowerDir + 'trumbowyg/dist/trumbowyg.min.js',
        config.bowerDir + 'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        config.bowerDir + 'AdminLTE/dist/js/app.min.js',
        config.bowerDir + 'html5shiv/dist/html5shiv.min.js',
        config.bowerDir + 'respond/dest/respond.min.js',
        config.bowerDir + 'morris.js/morris.min.js',
        'scripts.js'
    ], 'public/js/admin.js');

    /*
    * You can put here the styles and scripts for the front end
    *
    * Assume that the assets for front end is in /resources/assets/js
    * eg. mix.scripts(['front.js'], 'public/js/front.js');
    */    

    mix.scripts([
        config.bowerDir + 'jquery/dist/jquery.min.js',
        config.bowerDir + 'bootstrap/dist/js/bootstrap.min.js',
        'front.js'
    ], 'public/js/front.js');

    mix.copy('./bower_components/font-awesome/fonts', 'public/fonts')
    .copy('./bower_components/AdminLTE/dist/img', 'public/img')
    .copy('./bower_components/trumbowyg/dist/ui/images', 'public/css/images');
});
