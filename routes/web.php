<?php
define('ROUTE_BASE','drinkshop/public');
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

// show homepage (include header, sidebar, context or else)
Route::group(['middleware' => ['web']], function() {
    Route::get(ROUTE_BASE . '/homepage', 'HomeController@showHomepage');
    Route::get(ROUTE_BASE . '/homepage/home', 'HomeController@showHomepage');
    Route::get(ROUTE_BASE . '/homepage/about', 'HomeController@showAbout');
    Route::get(ROUTE_BASE . '/homepage/menu', 'HomeController@showMenu');


// new account page
    Route::get(ROUTE_BASE . '/homepage/signup', 'RegisterController@showSignUp');
// createMember associated with register.blade.php form "action"
    Route::post(ROUTE_BASE . '/homepage/registerMessage', 'RegisterController@signUp');


// route 不能有衝突
    Route::get(ROUTE_BASE . '/homepage/login', 'LoginController@showLogIn');
// correct account and password
    Route::post(ROUTE_BASE . '/homepage/login', 'LoginController@getLogin');

    Route::get(ROUTE_BASE . '/homepage', 'LogoutController@getLogout');
});
