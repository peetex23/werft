<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbBank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_bank', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('bank_nama',255);
			$table->char('bank_nomor_rek',255);
			$table->char('bank_jenis_rek',255);
			$table->char('bank_pinjaman',1)->default('n');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_bank');
	}

}
