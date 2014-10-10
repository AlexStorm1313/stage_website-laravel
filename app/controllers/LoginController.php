<?php

/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 09/10/14
 * Time: 09:38
 */
class LoginController extends BaseController
{
    public function postLogin()
    {

        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator);
        } else {

            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            if (Auth::attempt($userdata)) {
                return Redirect::to('home');
            } else {
                return Redirect::to('login')
                    ->withErrors('Oops, some info is incorrect');
            }
        }
    }

    public function postLogout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

}
