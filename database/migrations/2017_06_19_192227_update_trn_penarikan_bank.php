<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTrnPenarikanBank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trn_penarikan_bank', function(Blueprint $table)
		{
			//
			$table->smallInteger('id_bank')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trn_penarikan_bank', function(Blueprint $table)
		{
			//
		});
	}

}
