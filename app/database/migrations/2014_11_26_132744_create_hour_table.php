<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hour', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('week_id')->unsigned();
			$table->foreign('week_id')->unsigned()->references('id')->on('week')->onDelete('cascade');
			$table->integer('day_id')->unsigned();
			$table->foreign('day_id')->unsigned()->references('id')->on('day')->onDelete('cascade');
			$table->time('hour_of_day');
			$table->string('the_log');

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
		Schema::drop('hour');
	}

}
