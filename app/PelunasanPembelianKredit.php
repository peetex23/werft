<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PelunasanPembelianKredit extends Model {

	//
	protected $table = 'trn_pelunasan_pembelian_kredit';
	protected $fillable = [
		'pelunasan_pembelian_kredit_jumlah',
		'pelunasan_pembelian_kredit_metode_bayar',
		'id_pemasok',
		'pelunasan_pembelian_kredit_tanggal',
		'pelunasan_pembelian_kredit_catatan'
	];
}
