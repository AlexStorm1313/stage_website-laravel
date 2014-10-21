<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname', 64);
			$table->string('infix', 32);
			$table->string('sname', 64);
			$table->string('email', 50);
			$table->string('company', 50);
			$table->string('explain', 50);
			$table->boolean('active', false);

			// required for Laravel 4.1.26
			$table->string('remember_token', 100)->nullable();

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
		Schema::drop('register');
	}

}
