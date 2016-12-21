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
Route::get(ROUTE_BASE . '/homepage', 'HomeController@show');

// new account page
Route::get(ROUTE_BASE . '/homepage/signup', 'HomeController@signUp');
