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
            'fname' => 'Alex',
            'infix' => '',
            'sname' => 'Brasser',
            'email' => 'alexbrasser@gmail.com',
            'password' => Hash::make('alex13'),
            'company' => 'Storm.dev',
            'explain' => 'Intern',
            'role' => 'Stagiair',
            'active' => true,
            'activation_link' => true
        ));
        User::create(array(
            'fname' => 'Admin',
            'infix' => '',
            'sname' => 'Root',
            'email' => 'root@toor.root',
            'password' => Hash::make('toor'),
            'company' => 'Storm.dev',
            'explain' => 'Admin',
            'role' => 'Admin',
            'active' => true,
            'activation_link' => true
        ));
    }

}