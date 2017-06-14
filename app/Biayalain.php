<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Biayalain extends Model {

	//
	protected $table = 'mst_biaya_lain';
	protected $fillable = [
		'biaya_lain_nama',
		'biaya_lain_deskripsi'
		];
}
