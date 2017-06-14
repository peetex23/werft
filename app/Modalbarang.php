<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalbarang extends Model {

	//
	protected $table = 'trn_modal_barang';
	protected $fillable = [
		'modal_barang_nama',
		'modal_barang_nilai_perolehan',
		'modal_barang_masa_manfaat',
		'modal_barang_tanggal',
		'modal_barang_catatan'
	];
}
