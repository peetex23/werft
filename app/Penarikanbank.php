<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Penarikanbank extends Model {

	//
	protected $table = 'trn_penarikan_bank';
	protected $fillable = [
		'penarikan_bank_jumlah',
		'penarikan_bank_asalbank',
		'penarikan_bank_tanggal',
		'penarikan_bank_catatan',
		'penarikan_bank_flag'
	];
}
