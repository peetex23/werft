<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pembayaranaset;
use App\Aset;
use App\Pemasok;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PembayaranAsetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pembayaran_aset = DB::table('trn_pembayaran_aset')
					->join('tb_pemasok', 'tb_pemasok.id', '=', 'trn_pembayaran_aset.id_pemasok')
					->get();
		return View::make('mockups.pembayaran_asetList')->with('pembayaran_aset', $pembayaran_aset);
		// return var_dump($pembayaran_aset);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$aset 	= Aset::all();
		$pemasok = Pemasok::all();
		return View::make('mockups.pembayaran_aset', ['aset' => $aset, 'pemasok' => $pemasok]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'pembayaran_aset_harga' => 'required',
			'pembayaran_aset_jumlah' => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pembayaran_aset/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pembayaran_aset = new Pembayaranaset;
			$pembayaran_aset->pembayaran_aset_nama		= Input::get('pembayaran_aset_nama');
			$pembayaran_aset->pembayaran_aset_harga		= StripCurrency(Input::get('pembayaran_aset_harga'));
			$pembayaran_aset->pembayaran_aset_jumlah	= StripCurrency(Input::get('pembayaran_aset_jumlah'));
			$pembayaran_aset->pembayaran_aset_total		= StripCurrency(Input::get('pembayaran_aset_total'));
			$pembayaran_aset->id_pemasok				= Input::get('id_pemasok');
			$pembayaran_aset->pembayaran_aset_tanggal	= Carbon::createFromFormat('d-m-Y', Input::get('pembayaran_aset_tanggal'));
			$pembayaran_aset->pembayaran_aset_catatan	= addslashes(Input::get('pembayaran_aset_catatan')) ;
			$pembayaran_aset->save();

			Session::flash('message', 'Data pembayaran aset baru berhasil disimpan');
			return Redirect::to('pembayaran_aset');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
