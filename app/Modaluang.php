<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modaluang extends Model {

	//
	protected $table = 'trn_modal_uang';
	protected $fillable = [
		'modal_uang_jumlah',
		'modal_uang_metode_bayar',
		'modal_uang_tanggal',
		'modal_uang_catatan'
	];
}
