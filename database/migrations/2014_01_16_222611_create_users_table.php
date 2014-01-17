<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			$table->create();

			$table->increments('idusers');
			$table->string('fullname',300); //tamaño de 300; el tamaño por defecto es de 250
			$table->string('adress',300);
			$table->string('email');
			$table->string('telephone');
			$table->integer('idaccounts');
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