<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaranaset extends Model {

	//
	protected $table = 'trn_pembayaran_aset';
	protected $fillable = [
		'pembayaran_aset_nama',
		'pembayaran_aset_harga',
		'pembayaran_aset_jumlah',
		'pembayaran_aset_total',
		'id_pemasok',
		'pembayaran_aset_tanggal',
		'pembayaran_aset_catatan'
	];
}
