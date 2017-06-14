<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPenghapusanPiutang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_penghapusan_piutang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('penghapusan_piutang_jumlah')->unsigned()->nullable();
			$table->smallInteger('id_pelanggan')->unsigned()->nullable();
			$table->date('penghapusan_piutang_tanggal')->nullable();
			$table->text('penghapusan_piutang_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_penghapusan_piutang');
	}

}
