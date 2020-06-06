<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeguridadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguridad', function(Blueprint $table)
		{
			$table->integer('id_seguridad')->primary('seguridad_pkey');
			$table->boolean('simulacion_prese')->nullable();
			$table->boolean('fugas_gas')->nullable();
			$table->boolean('vigilancia_auto')->nullable();
			$table->boolean('control_rem')->nullable();
			$table->boolean('incendios')->nullable();
			$table->boolean('fallos_elec')->nullable();
			$table->boolean('camara')->nullable();
			$table->boolean('alarma')->nullable();
			$table->boolean('sensores')->nullable();
			$table->bigInteger('view_count')->nullable();
			$table->string('sensor_pin', 260)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seguridad');
	}

}
