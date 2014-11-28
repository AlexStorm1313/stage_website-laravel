<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 26/11/14
 * Time: 15:32
 */
class Day extends Eloquent
{
    protected $table = 'day';
    protected $guarded = array('id');
    protected $fillable = array('week_number', 'all_filled', 'date_of_day');
}