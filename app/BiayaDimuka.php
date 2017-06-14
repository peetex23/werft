<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaDimuka extends Model {

	//
	protected $table = 'trn_biaya_dimuka';
	protected $fillable = [
		'biaya_dimuka_jumlah',
		'biaya_dimuka_jangkawaktu',
		'biaya_dimuka_metode_bayar',
		'biaya_dimuka_tanggal',
		'biaya_dimuka_catatan'
	];
}
