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
Route::get('home', array('before' => array('auth'), 'uses' => 'ViewsController@showHome'));
Route::get('users', array('before' => array('auth', 'admin'), 'uses' => 'ViewsController@showUsers'));
Route::post('users', array('uses' => 'LoginController@toRegister'));
Route::get('users/{id}/edit', array('before' => array('auth', 'admin'),'uses' => 'UsersController@edit'));
Route::patch('users/{id}/update', array('as' => 'update_user', 'before' => array('auth', 'admin'), 'uses' => 'UsersController@update'));
Route::get('logs', array('before' => array('auth'), 'uses' => 'ViewsController@showLogs'));
Route::get('documents', array('before' => array('auth'), 'uses' => 'ViewsController@showDocuments'));
Route::get('settings', array('before' => array('auth'), 'uses' => 'ViewsController@showSettings'));

