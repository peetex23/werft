<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPembelianAset extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pembelian_aset', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('pembelian_aset_namaaset', 255)->nullable();
			$table->bigInteger('pembelian_aset_nilaiperolehan')->unsigned()->nullable();
			$table->smallInteger('pembelian_aset_masamanfaat')->unsigned()->nullable();
			$table->char('pembelian_aset_metode_bayar', 20)->nullable();
			$table->smallInteger('pembelian_aset_jumlah')->unsigned()->nullable();
			$table->bigInteger('pembelian_aset_totalharga')->unsigned()->nullable();
			$table->smallInteger('idpemasok')->unsigned()->nullable();
			$table->char('pembelian_aset_istetap', 1)->default("y")->nullable();
			$table->char('pembelian_aset_istunai', 1)->default("y")->nullable();
			$table->char('pembelian_aset_isdownpayment', 1)->default("n")->nullable();
			$table->date('pembelian_aset_tanggal')->nullable();
			$table->text('pembelian_aset_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pembelian_aset');
	}

}
