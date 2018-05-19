<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbCoba extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tb_coba', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('pelanggan_nama',255);
			$table->char('pelanggan_alamat',255);
			$table->char('pelanggan_telepon',20)->nullable();
			$table->char('pelanggan_kontaklain',20)->nullable();
			$table->char('pelanggan_email', 255)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_coba');
	}

}
