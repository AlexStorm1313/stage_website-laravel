<?php

// app/database/seeds/CommentTableSeeder.php

class WeekTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('week')->delete();

        Week::create(array(
            'date_created' => date('Y-m-d'),
            'completed' => false
        ));
    }

}
	
	