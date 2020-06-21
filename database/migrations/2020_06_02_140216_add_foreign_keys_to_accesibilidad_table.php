<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAccesibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('accesibilidad', function(Blueprint $table)
		{
			$table->foreign('num_contrato', 'acces_fk')->references('num_contrato')->on('hogar')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('accesibilidad', function(Blueprint $table)
		{
			$table->dropForeign('acces_fk');
		});
	}

}
