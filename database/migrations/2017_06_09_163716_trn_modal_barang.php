<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrnModalBarang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trn_modal_barang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('modal_barang_nama',255)->nullable();
			$table->bigInteger('modal_barang_nilai_perolehan')->unsigned()->nullable();
			$table->smallInteger('modal_barang_masa_manfaat')->unsigned()->nullable();
			$table->date('modal_barang_tanggal')->nullable();
			$table->text('modal_barang_catatan')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trn_modal_barang');
	}

}
