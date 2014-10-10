<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 08/10/14
 * Time: 15:52
 */
// app/database/seeds/UserTableSeeder.php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'fname'     => 'Alex',
            'infix' => '',
            'sname'    => 'Brasser',
            'email'    => 'alexbrasser@gmail.com',
            'password' => Hash::make('alex13'),
            'company'  => 'Storm.dev',
            'role'     => 'Admin',
        ));
        User::create(array(
            'fname'     => 'Jan',
            'infix' => '',
            'sname'    => 'Benag',
            'email'    => 'alexbrasser@wanker.com',
            'password' => Hash::make('alex13'),
            'company'  => 'Storm2.dev',
            'role'     => 'Adminzz',
        ));
        User::create(array(
            'fname'     => 'Jan',
            'infix' => 'van',
            'sname'    => 'Bengen',
            'email'    => 'jan@wanker.com',
            'password' => Hash::make('alex13'),
            'company'  => 'Storm13.dev',
            'role'     => 'User',
        ));
    }

}