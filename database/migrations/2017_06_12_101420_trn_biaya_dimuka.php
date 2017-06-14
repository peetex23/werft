<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnBiayaDimuka extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_biaya_dimuka', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('biaya_dimuka_jumlah')->unsigned()->nullable();
			$table->smallInteger('biaya_dimuka_jangkawaktu')->unsigned()->nullable();
			$table->char('biaya_dimuka_metode_bayar', 20)->nullable();
			$table->date('biaya_dimuka_tanggal')->nullable();
			$table->text('biaya_dimuka_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_biaya_dimuka');
	}

}
