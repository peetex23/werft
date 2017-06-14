<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnModalUang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_modal_uang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('modal_uang_jumlah')->unsigned()->nullable();
			$table->char('modal_uang_metode_bayar',255)->nullable();
			$table->date('modal_uang_tanggal')->nullable();
			$table->text('modal_uang_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_modal_uang');
	}

}
