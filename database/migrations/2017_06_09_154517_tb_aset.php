<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbAset extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_aset', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('aset_nama',255);
			$table->char('aset_kelompok',255);
			$table->tinyInteger('aset_masa_manfaat')->unsigned()->nullable();
			$table->bigInteger('aset_harga')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_aset');
	}

}
