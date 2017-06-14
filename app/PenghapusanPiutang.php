<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PenghapusanPiutang extends Model {

	//
	protected $table = 'trn_penghapusan_piutang';
	protected $fillable = [
		'penghapusan_piutang_jumlah',
		'id_pelanggan',
		'penghapusan_piutang_tanggal',
		'penghapusan_piutang_catatan'
	];
}
