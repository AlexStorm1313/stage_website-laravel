<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 26/11/14
 * Time: 15:33
 */
class Hour extends Eloquent
{
    protected $table = 'hour';
    protected $guarded = array('id');
    protected $fillable = array('date_of_day', 'hour_of_day', 'the_log');
}