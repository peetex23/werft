<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPelunasanUtangBank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pelunasan_utang_bank', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('pelunasan_utang_bank_jumlah_pokok')->unsigned()->nullable();
			$table->bigInteger('pelunasan_utang_bank_jumlah_bunga')->unsigned()->nullable();
			$table->char('pelunasan_utang_bank_metode_bayar', 20)->nullable();
			$table->smallInteger('id_bank')->unsigned()->nullable();
			$table->date('pelunasan_utang_bank_tanggal')->nullable();
			$table->text('pelunasan_utang_bank_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pelunasan_utang_bank');
	}

}
