<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jasatunai extends Model {

	//
	protected $table = 'trn_jasa_tunai';
	protected $fillable = [
		'jasa_tunai_deskripsi',
		'jasa_tunai_biaya',
		'jasa_tunai_metode',
		'id_pelanggan',
		'jasa_tunai_tanggal',
		'jasa_tunai_catatan'
	];
}
