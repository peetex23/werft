<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPemasok extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pemasok', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('pemasok_nama',255);
			$table->char('pemasok_alamat',255);
			$table->char('pemasok_telepon',20)->nullable();
			$table->char('pemasok_kontaklain',20)->nullable();
			$table->char('pemasok_email', 255)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_pemasok');
	}

}
