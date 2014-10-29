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
    }

}