<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstSaldoAwal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_saldo_awal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('saldo_awal_periode',255);
			$table->char('saldo_awal_akun',255);
			$table->bigInteger('saldo_awal_nilai')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mst_saldo_awal');
	}

}
