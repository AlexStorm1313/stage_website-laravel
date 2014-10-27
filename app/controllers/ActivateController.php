<?php

/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 09/10/14
 * Time: 09:38
 */
class ActivateController extends BaseController
{
    public function postActivate()
    {
        if (Input::get('activate-register')) {

            $data = array(Register::get('fname', 'infix', 'sname', 'email', 'company'));
            $activate = Input::get('role');

            DB::table('users')->insert(array(
                    $data, $activate

                )
            );
        }

    }
}
