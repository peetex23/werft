<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPelunasanBiaya extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pelunasan_biaya', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('pelunasan_biaya_jenis', 255)->nullable();
			$table->bigInteger('pelunasan_biaya_nilai')->unsigned()->nullable();
			$table->char('pelunasan_biaya_metode_bayar', 20)->nullable();
			$table->date('pelunasan_biaya_tanggal')->nullable();
			$table->text('pelunasan_biaya_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pelunasan_biaya');
	}

}
