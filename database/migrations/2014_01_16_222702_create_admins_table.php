<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admins', function($table)
		{
			$table->create();

			$table->increments('idadmins');
			$table->string('fullname',300); //tamaño de 300; el tamaño por defecto es de 250
			$table->string('email');
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
		Schema::drop('admins');
	}

}