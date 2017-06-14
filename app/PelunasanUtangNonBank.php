<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PelunasanUtangNonBank extends Model {

	//
	protected $table = 'trn_pelunasan_utang_nonbank';
	protected $fillable = [
		'pelunasan_utang_nonbank_jumlah',
		'pelunasan_utang_nonbank_metode_bayar',
		'pelunasan_utang_nonbank_tanggal',
		'pelunasan_utang_nonbank_catatan'
	];
}
