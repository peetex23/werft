<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PembelianAset;
use App\Pemasok;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianAsetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($is_tetap, $is_tunai)
	{
		//
		$pemasok = Pemasok::all();
		if ($is_tetap == 'tetap' && $is_tunai == 'tunai') {
			return View::make('mockups.pembelian_aset_tetap_tunai');
		} elseif ($is_tetap == 'tetap' && $is_tunai == 'kredit') {
			return View::make('mockups.pembelian_aset_tetap_kredit')->with('pemasok', $pemasok);
		} elseif ($is_tetap == 'lain' && $is_tunai == 'tunai') {
			return View::make('mockups.pembelian_aset_lain_tunai');
		} elseif ($is_tetap == 'lain' && $is_tunai == 'kredit') {
			return View::make('mockups.pembelian_aset_lain_kredit')->with('pemasok',$pemasok);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$is_tunai = Input::get('pembelian_aset_istunai');
		$is_tetap = Input::get('pembelian_aset_istetap');

		$rules = array('pembelian_aset_namaaset' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pembelian_aset/create/'. $is_tetap ."/". $is_tunai)
				->withErrors($validator)
				->withInput();
		} else {
			$pembelian_aset = new PembelianAset;
			$pembelian_aset->pembelian_aset_jumlah			= Input::get('pembelian_aset_jumlah');
			$pembelian_aset->pembelian_aset_metode_bayar	= Input::get('pembelian_aset_metode_bayar');
			$pembelian_aset->pembelian_aset_masamanfaat		= Input::get('pembelian_aset_masamanfaat');
			$pembelian_aset->pembelian_aset_nilaiperolehan	= Input::get('pembelian_aset_nilaiperolehan');
			$pembelian_aset->pembelian_aset_totalharga		= Input::get('pembelian_aset_totalharga');
			$pembelian_aset->idpemasok						= Input::get('idpemasok');
			$pembelian_aset->pembelian_aset_isdownpayment	= Input::get('pembelian_aset_isdownpayment');
			$pembelian_aset->pembelian_aset_istunai			= Input::get('pembelian_aset_istunai');
			$pembelian_aset->pembelian_aset_istetap			= Input::get('pembelian_aset_istetap');
			$pembelian_aset->pembelian_aset_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('pembelian_aset_tanggal'));
			$pembelian_aset->pembelian_aset_catatan			= addslashes(Input::get('pembelian_aset_catatan')) ;
			$pembelian_aset->save();

			Session::flash('message', 'Data pembayaran piutang baru berhasil disimpan');
			return Redirect::to('pembelian_aset');
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
