<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Utangbank extends Model {

	//
	protected $table = 'trn_utang';
	protected $fillable = [
		'utang_jumlahpokok',
		'utang_bunga',
		'utang_jenis_bunga',
		'utang_jangka_waktu',
		'id_bank',
		'utang_metode_bayar',
		'utang_tanggal',
		'utang_bank',
		'utang_catatan'
	];
}
