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
