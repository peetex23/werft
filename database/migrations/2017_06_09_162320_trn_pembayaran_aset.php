<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPembayaranAset extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pembayaran_aset', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('pembayaran_aset_nama', 255)->nullable();
			$table->bigInteger('pembayaran_aset_harga')->unsigned()->nullable();
			$table->smallInteger('pembayaran_aset_jumlah')->unsigned()->nullable();
			$table->bigInteger('pembayaran_aset_total')->unsigned()->nullable();
			$table->smallInteger('id_pemasok')->unsigned()->nullable();
			$table->date('pembayaran_aset_tanggal')->nullable();
			$table->text('pembayaran_aset_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pembayaran_aset');
	}

}
