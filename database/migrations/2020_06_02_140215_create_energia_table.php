<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('energia', function(Blueprint $table)
		{
			$table->integer('id_energia', true);
			$table->integer('num_contrato');
			$table->boolean('Control_del_clima')->nullable();
			$table->boolean('Agua_caliente')->nullable();
			$table->boolean('Riego')->nullable();
			$table->boolean('Electrodomesticos')->nullable();
			$table->boolean('Sensor_de_movimiento')->nullable();
			$table->boolean('Control_de_luz')->nullable();
			$table->boolean('Persianas')->nullable();
			$table->boolean('Gestion_de_tarifas')->nullable();
			$table->bigInteger('view_count')->nullable();
			$table->text('consumo_total')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('energia');
	}

}
