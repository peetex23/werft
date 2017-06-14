<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstBiayaLain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mst_biaya_lain', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('biaya_lain_nama',255);
			$table->text('biaya_lain_deskripsi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mst_biaya_lain');
	}

}
