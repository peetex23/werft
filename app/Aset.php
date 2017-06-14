<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model {

	//
	protected $table = 'tb_aset';
	protected $fillable = [
		'aset_nama',
		'aset_kelompok',
		'aset_masa_manfaat',
		'aset_harga'
		];
}
