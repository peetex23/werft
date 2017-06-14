<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model {

	//
	protected $table = 'tb_pelanggan';
	protected $fillable = [
		'pelanggan_nama',
		'pelanggan_alamat',
		'pelanggan_telepon',
		'pelanggan_kontaklain',
		'pelanggan_email'
		];

}
