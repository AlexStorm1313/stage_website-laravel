<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('day', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('week_number');
			$table->integer('date_year');
			$table->boolean('all_filled');
			$table->date('date_of_day');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('day');
	}

}
