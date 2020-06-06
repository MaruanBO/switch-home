<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHogarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hogar', function(Blueprint $table)
		{
			$table->integer('num_contrato')->primary('hogar_pkey');
			$table->text('direccion')->nullable();
			$table->integer('telefono')->nullable();
			$table->text('poblacion')->nullable();
			$table->text('localidad')->nullable();
			$table->text('email')->nullable();
			$table->text('dni')->nullable();
			$table->text('titular')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hogar');
	}

}
