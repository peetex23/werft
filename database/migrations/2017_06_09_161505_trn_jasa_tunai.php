<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnJasaTunai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_jasa_tunai', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('jasa_tunai_deskripsi', 255)->nullable();
			$table->bigInteger('jasa_tunai_biaya')->unsigned()->nullable();
			$table->char('jasa_tunai_metode', 30)->nullable();
			$table->smallInteger('id_pelanggan')->unsigned()->nullable();
			$table->date('jasa_tunai_tanggal')->nullable();
			$table->text('jasa_tunai_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_jasa_tunai');
	}

}
