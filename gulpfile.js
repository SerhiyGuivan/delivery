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
var path = {
    js: {
       bower: {
           angular: '../bower/angular/angular.min.js',
           angularBootstrap: {
                main: '../bower/angular-bootstrap/ui-bootstrap.min.js',
                tpls: '../bower/angular-bootstrap/ui-bootstrap-tpls.min.js'
           },
           angularResource: '../bower/angular-resource/angular-resource.min.js',
           angularUiRouter: '../bower/angular-ui-router/release/angular-ui-router.min.js',
           bootstrap: '../bower/bootstrap/dist/js/bootstrap.min.js',
           jquery: '../bower/jquery/dist/jquery.min.js',
           jqueryInputMask: '../bower/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
           jqueryToaster: '../bower/jquery.toaster/jquery.toaster.js',
           jquerySmoothScroll: '../bower/jquery-smooth-scroll/jquery.smooth-scroll.min.js',
           jqueryViewportChecker: '../bower/jQuery-viewport-checker/dist/jquery.viewportchecker.min.js',
           parsleyjs: {
               main: '../bower/parsleyjs/dist/parsley.min.js',
               locale: '../bower/parsleyjs/dist/i18n/uk.js'
           },
           sweetalert: '../bower/sweetalert/dist/sweetalert.min.js',
       },
        admin:{
            app: 'admin/app.js',
            routes: 'admin/routes.js',
            resource: 'admin/resource.js',
            directives: {
                navbar: 'admin/directives/navbar.js'
            },
            controllers: {
                main:'admin/controllers/main.js'
            }
        },
        home: 'home.js',

    },
    css: {
        bower: {
            angularBootstrap: '../bower/angular-bootstrap/ui-bootstrap-csp.css',
            animateCss: '../bower/animate.css/animate.min.css',
            bootstrap: '../bower/bootstrap/dist/css/bootstrap.min.css',
            sweetalert: '../bower/sweetalert/dist/sweetalert.css',
        }
    },
    sass: {
        home:'home.scss',
        admin:'admin.scss'
    }
};

elixir(function(mix) {
    mix.scripts([
        path.js.bower.jquery,
        path.js.bower.bootstrap,
        path.js.bower.jqueryInputMask,
        path.js.bower.jquerySmoothScroll,
        path.js.bower.jqueryViewportChecker,
        path.js.bower.parsleyjs.main,
        path.js.bower.parsleyjs.locale,
        path.js.bower.sweetalert,
        path.js.home
    ], 'public/home/js/main.js');
    mix.sass([
        path.sass.home
    ], 'public/home/css/main.css');
    mix.styles([
        path.css.bower.bootstrap,
        path.css.bower.animateCss,
        path.css.bower.sweetalert
    ], 'public/home/css/vendor.css');

    mix.scripts([
        path.js.bower.angular,
        path.js.bower.angularBootstrap.main,
        path.js.bower.angularBootstrap.tpls,
        path.js.bower.angularResource,
        path.js.bower.angularUiRouter
    ], 'public/admin/js/vendor.js');

    mix.scripts([
        path.js.admin.app,
        path.js.admin.routes,
        path.js.admin.resource,
        path.js.admin.directives.navbar,
        path.js.admin.controllers.main
    ], 'public/admin/js/main.js');

    mix.sass([
        path.sass.admin
    ], 'public/admin/css/main.css');
    mix.styles([
        path.css.bower.angularBootstrap,
        path.css.bower.bootstrap,
        path.css.bower.animateCss,
        path.css.bower.sweetalert,
    ], 'public/admin/css/vendor.css');

});
