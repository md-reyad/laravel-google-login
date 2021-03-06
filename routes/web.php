<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//
//Route::get('login/github', 'LoginController@redirectToProvider');
//Route::get('login/github/callback', 'LoginController@handleProviderCallback');
Route::get('auth/google', 'Auth\SocialAuthControlle@redirectToProvider');
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
