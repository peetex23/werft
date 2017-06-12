<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPelunasanPembelianKredit extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pelunasan_pembelian_kredit', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('pelunasan_pembelian_kredit_jumlah')->unsigned()->nullable();
			$table->char('pelunasan_pembelian_kredit_metode_bayar', 20)->nullable();
			$table->smallInteger('id_pemasok')->unsigned()->nullable();
			$table->date('pelunasan_pembelian_kredit_tanggal')->nullable();
			$table->text('pelunasan_pembelian_kredit_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pelunasan_pembelian_kredit');
	}

}
