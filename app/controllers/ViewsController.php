<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 08/10/14
 * Time: 14:27
 */

class ViewsController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Views Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'ViewsController@show......');
    |
    */
    public function showLogin(){
        return View::make('login');
    }

    public function showRegister()
    {
        return View::make('register');
    }

    public function showHome()
    {
        return View::make('home');
    }

}
