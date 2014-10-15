<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 15/10/14
 * Time: 14:46
 */

class Register extends Eloquent {
    protected $guarded = array();
    protected $table = 'register';
    public $timestamps = 'false';

    public static function saveFormData($data){
        DB::table('register')->insert($data);
    }
}