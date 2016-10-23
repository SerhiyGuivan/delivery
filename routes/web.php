<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('dashboard', function(){
    return view('admin.index');
})->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('/orders', 'OrdersCtrl', ['only' => ['index', 'store', 'update', 'destroy']]);

//Route::group(array('prefix'=>'/templates/'),function(){
//    Route::get('{template}', array( function($template)
//    {
//        $template = str_replace(".html","",$template);
//        View::addExtension('html','php');
//        return View::make('templates.'.$template);
//    }));
//});