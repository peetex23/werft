<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaranpiutang extends Model {

	//
	protected $table = 'trn_pembayaran_piutang';
	protected $fillable = [
		'pembayaran_piutang_jumlah',
		'pembayaran_piutang_metode',
		'id_pelanggan',
		'pembayaran_piutang_tanggal',
		'pembayaran_piutang_catatan'
	];
}
