<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPembayaranPiutang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pembayaran_piutang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('pembayaran_piutang_jumlah')->unsigned()->nullable();
			$table->char('pembayaran_piutang_metode', 30)->nullable();
			$table->smallInteger('id_pelanggan')->unsigned()->nullable();
			$table->date('pembayaran_piutang_tanggal')->nullable();
			$table->text('pembayaran_piutang_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pembayaran_piutang');
	}

}
