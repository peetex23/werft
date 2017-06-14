<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPenarikanBank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_penarikan_bank', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('penarikan_bank_jumlah')->unsigned()->nullable();
			$table->char('penarikan_bank_asalbank', 255)->nullable();
			$table->date('penarikan_bank_tanggal')->nullable();
			$table->text('penarikan_bank_catatan')->nullable();
			$table->char('penarikan_bank_flag', 255)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_penarikan_bank');
	}

}
