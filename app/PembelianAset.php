<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianAset extends Model {

	//
	protected $table = 'trn_pembelian_aset';
	protected $fillable = [
		'pembelian_aset_namaaset',
		'pembelian_aset_nilaiperolehan',
		'pembelian_aset_masamanfaat',
		'pembelian_aset_metode_bayar',
		'pembelian_aset_jumlah',
		'pembelian_aset_totalharga',
		'idpemasok',
		'pembelian_aset_istetap',
		'pembelian_aset_istunai',
		'pembelian_aset_isdownpayment',
		'pembelian_aset_tanggal',
		'pembelian_aset_catatan'
	];
}
