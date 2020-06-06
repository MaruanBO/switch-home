<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLucesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('luces', function(Blueprint $table)
		{
			$table->boolean('salon')->nullable();
			$table->boolean('baño')->nullable();
			$table->boolean('habitacion')->nullable();
			$table->boolean('cocina')->nullable();
			$table->bigInteger('id_luces')->primary('luces_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('luces');
	}

}
