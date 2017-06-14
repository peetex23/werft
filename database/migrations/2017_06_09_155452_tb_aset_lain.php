<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbAsetLain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_aset_lain', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('aset_lain_nama', 255);
			$table->bigInteger('aset_lain_nilaiperolehan')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_aset_lain');
	}

}
