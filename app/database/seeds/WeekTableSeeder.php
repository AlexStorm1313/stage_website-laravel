<?php

// app/database/seeds/CommentTableSeeder.php
date_default_timezone_set("Europe/Amsterdam");
class WeekTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('week')->delete();
        Week::create(array(
            'date_created' => date('Y-m-d'),
            'completed' => false,
            'date_completed' => '0000-00-00',
            'can_be_completed' => date('y-m-d', StrToTime("Next Sunday")),
            'week_number' => date('W'),
            'date_year' => date('Y'),
            'all_filled_up' => false
        ));
    }

}
	
	