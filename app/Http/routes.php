<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
ini_set('xdebug.max_nesting_level', 200);
Route::get('profile', [
    'uses'  => 'UserController@getProfile',
    'as'    => 'profile'
]);

Route::post('profile', [
    'uses'  => 'UserController@updateAvatar',
    'as'    => 'profile'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
