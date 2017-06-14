<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldoawal extends Model {

	//
	protected $table = 'mst_saldo_awal';
	protected $fillable = [
		'saldo_awal_periode',
		'saldo_awal_akun',
		'saldo_awal_nilai'
	];
}
