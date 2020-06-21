<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnergiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('energia', function(Blueprint $table)
		{
			$table->foreign('num_contrato', 'fk_hogar')->references('num_contrato')->on('hogar')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('energia', function(Blueprint $table)
		{
			$table->dropForeign('fk_hogar');
		});
	}

}
