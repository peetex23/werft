<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PelunasanUtangBank extends Model {

	//
	protected $table = 'trn_pelunasan_utang_bank';
	protected $fillable = [
		'pelunasan_utang_bank_jumlah_pokok',
		'pelunasan_utang_bank_jumlah_bunga',
		'pelunasan_utang_bank_metode_bayar',
		'id_bank',
		'pelunasan_utang_bank_tanggal',
		'pelunasan_utang_bank_catatan'
	];
}
