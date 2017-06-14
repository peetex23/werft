<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PelunasanBiaya extends Model {

	//
	protected $table = 'trn_pelunasan_biaya';
	protected $fillable = [
		'pelunasan_biaya_jenis',
		'pelunasan_biaya_nilai',
		'pelunasan_biaya_metode_bayar',
		'pelunasan_biaya_tanggal',
		'pelunasan_biaya_catatan'
	];
}
