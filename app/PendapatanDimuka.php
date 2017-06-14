<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PendapatanDimuka extends Model {

	//
	protected $table = 'trn_pendapatan_dimuka';
	protected $fillable = [
		'pendapatan_dimuka_jumlah',
		'pendapatan_dimuka_jangka_waktu',
		'pendapatan_dimuka_tanggal',
		'pendapatan_dimuka_catatan'
	];
}
