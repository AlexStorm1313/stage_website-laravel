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
    protected $fillable = array('hour_of_day', 'the_log', 'week_id', 'day_id');
}