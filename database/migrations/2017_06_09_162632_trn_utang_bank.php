<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnUtangBank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_utang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('utang_jumlahpokok')->unsigned()->nullable();
			$table->float('utang_bunga')->unsigned()->nullable();
			$table->char('utang_jenis_bunga',255)->nullable();
			$table->smallInteger('utang_jangka_waktu')->unsigned()->nullable();
			$table->smallInteger('id_bank')->unsigned()->nullable();
			$table->char('utang_metode_bayar')->nullable();
			$table->date('utang_tanggal')->nullable();
			$table->char('utang_bank', 1)->default('y')->nullable();
			$table->text('utang_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_utang');
	}

}
