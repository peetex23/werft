<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnPelunasanUtangNonbank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_pelunasan_utang_nonbank', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('pelunasan_utang_nonbank_jumlah')->unsigned()->nullable();
			$table->char('pelunasan_utang_nonbank_metode_bayar', 20)->nullable();
			$table->date('pelunasan_utang_nonbank_tanggal')->nullable();
			$table->text('pelunasan_utang_nonbank_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_pelunasan_utang_nonbank');
	}

}
