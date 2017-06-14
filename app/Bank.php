<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model {

	//
	protected $table = 'tb_bank';
	protected $fillable = [
		'bank_nama',
		'bank_jenis_rek',
		'bank_nomor_rek',
		'bank_pinjaman'
	];
}
