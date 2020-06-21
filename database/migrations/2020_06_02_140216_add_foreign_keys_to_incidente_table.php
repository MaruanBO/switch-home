<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIncidenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('incidente', function(Blueprint $table)
		{
			$table->foreign('id_seguridad', 'fk_seguridad')->references('id_seguridad')->on('seguridad')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('incidente', function(Blueprint $table)
		{
			$table->dropForeign('fk_seguridad');
		});
	}

}
