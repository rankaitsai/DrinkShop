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
    Route::get(ROUTE_BASE . '/homepage/personal', 'HomeController@showPersonal');


// new account page
    Route::get(ROUTE_BASE . '/homepage/register', 'RegisterController@showRegister');
// createMember associated with register.blade.php form "action"
    Route::post(ROUTE_BASE . '/register', ['uses' =>'RegisterController@getRegister', 'as' => 'register.form']);


// route 不能有衝突
    // url = 接收網址
    Route::get(ROUTE_BASE . '/homepage/login', 'LoginController@showLogIn');
// correct account and password
    // url = form 送出
    Route::post(ROUTE_BASE . '/homepage/home', 'LoginController@getLogin');


    Route::get(ROUTE_BASE . '/homepage', 'LogoutController@getLogout');


    Route::get(ROUTE_BASE . '/homepage/menu', 'DrinkController@getAllDrinks');

    Route::get(ROUTE_BASE . '/homepage/menu/{drinkId}', 'MemberController@getDrinksToShoppingCart');


    Route::get(ROUTE_BASE . '/homepage/menu/comment/{drinkId}', 'MemberController@showComment');
    Route::post(ROUTE_BASE . '/homepage/menu/comment', ['uses' => 'MemberController@getComment', 'as' => 'comment.form']);
});
