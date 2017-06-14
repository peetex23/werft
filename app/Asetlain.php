<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asetlain extends Model {

	//
	protected $table = 'tb_aset_lain';
	protected $fillable = [
		'aset_lain_nama',
		'aset_lain_nilaiperolehan'
	];
}
