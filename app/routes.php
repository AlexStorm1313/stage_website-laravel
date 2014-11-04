<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('before' => array('checklogin'), 'uses' => 'HomeController@showLanding'));
Route::get('login', array('before' => array('checklogin'), 'uses' => 'ViewsController@showLogin'));
Route::post('login', array('uses' => 'LoginController@postLogin'));
Route::get('logout', array('uses' => 'LoginController@postLogout'));
Route::get('register', array('before' => array('checklogin'), 'uses' => 'ViewsController@showRegister'));
Route::post('register', function () {
    $obj = new RegisterController();
    return $obj->store();
});
Route::get('password/reset/{id}/{token}', array('before' => array('checklogin'), 'uses' => 'UsersController@setPassword'));
Route::get('users/{id}/edit/givepassword', array('before' => array('auth', 'boss'), 'uses' => 'UsersController@givePassword'));
Route::get('home', array('before' => array('auth'), 'uses' => 'ViewsController@showHome'));
Route::get('users', array('before' => array('auth', 'boss'), 'uses' => 'ViewsController@showUsers'));
Route::post('users', array('uses' => 'LoginController@toRegister'));
Route::get('users/{id}/edit', array('before' => array('auth', 'boss'), 'uses' => 'UsersController@edit'));
Route::patch('users/{id}/update', array('before' => array('auth', 'boss'), 'as' => 'update_user', 'uses' => 'UsersController@update'));
Route::get('users/{id}/delete', array('before' => array('auth', 'boss'), 'as' => 'delete_user', 'uses' => 'UsersController@destroy'));
Route::patch('settings/{id}/update', array('before' => array('auth'), 'as' => 'update_profile', 'uses' => 'UsersController@update_profile'));
Route::get('logs', array('before' => array('auth'), 'uses' => 'ViewsController@showLogs'));
Route::get('documents', array('before' => array('auth'), 'uses' => 'ViewsController@showDocuments'));
Route::post('documents', array('before' => array('auth', 'boss'), 'uses' => 'FileController@store'));
Route::get('{file}/delete', array('before' => array('auth', 'boss'), 'uses' => 'FileController@delete'));
Route::get('settings', array('before' => array('auth'), 'uses' => 'ViewsController@showSettings'));

