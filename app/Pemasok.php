<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model {

	//
	protected $table = 'tb_pemasok';
	protected $fillable = [
		'pemasok_nama',
		'pemasok_alamat',
		'pemasok_telepon',
		'pemasok_kontaklain',
		'pemasok_email'
		];
}
