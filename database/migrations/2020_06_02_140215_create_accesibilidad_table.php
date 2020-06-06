<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccesibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accesibilidad', function(Blueprint $table)
		{
			$table->integer('id_accesibilidad', true);
			$table->boolean('reconocimiento_voz')->nullable();
			$table->boolean('telefono_visual')->nullable();
			$table->boolean('interfaz_inal')->nullable();
			$table->boolean('equipo_iris')->nullable();
			$table->bigInteger('view_count')->nullable();
			$table->bigInteger('num_contrato')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accesibilidad');
	}

}
