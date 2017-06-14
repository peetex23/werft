<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPendapatanDimuka extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pendapatan_dimuka', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('pendapatan_dimuka_jumlah')->unsigned()->nullable();
			$table->smallInteger('pendapatan_dimuka_jangka_waktu')->unsigned()->nullable();
			$table->date('pendapatan_dimuka_tanggal')->nullable();
			$table->text('pendapatan_dimuka_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pendapatan_dimuka');
	}

}
