<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname', 64);
			$table->string('infix', 32);
			$table->string('sname', 64);
			$table->string('email', 320);
			$table->string('password', 64);
			$table->string('company', 320);
			$table->enum('role', array('Admin', 'User', 'Stagedocent', 'Stagebegeleider', 'Stagiair'));
			$table->boolean('active', true);

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
		Schema::drop('users');
	}

}
