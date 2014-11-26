<?php
/**
 * Created by PhpStorm.
 * User: alexstorm13
 * Date: 14/11/14
 * Time: 13:43
 */
class Week extends Eloquent{
    protected $table = 'week';
    protected $guarded = array('id');
    protected $fillable = array('date_created', 'date_completed', 'completed', 'can_be_completed', 'week_number');
}