<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncidenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidente', function(Blueprint $table)
		{
			$table->integer('id_incidente')->primary('incidente_pkey');
			$table->integer('id_seguridad');
			$table->text('motivo')->nullable();
			$table->timestamps();
			$table->text('resolucion')->nullable();
			$table->text('componente_afec')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('incidente');
	}

}
