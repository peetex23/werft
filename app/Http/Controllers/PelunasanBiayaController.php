<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PelunasanBiaya;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelunasanBiayaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pelunasan_biaya = DB::table('trn_pelunasan_biaya')->get();
		return View::make('mockups.pelunasan_biayaList')->with('pelunasan_biaya', $pelunasan_biaya);
		// return var_dump($pelunasan_biaya);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.pelunasan_biaya');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('pelunasan_biaya_nilai' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pelunasan_biaya/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pelunasan_biaya = new PelunasanBiaya;
			$pelunasan_biaya->pelunasan_biaya_nilai			= StripCurrency(Input::get('pelunasan_biaya_nilai'));
			$pelunasan_biaya->pelunasan_biaya_metode_bayar	= Input::get('pelunasan_biaya_metode_bayar');
			$pelunasan_biaya->pelunasan_biaya_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('pelunasan_biaya_tanggal'));
			$pelunasan_biaya->pelunasan_biaya_catatan		= addslashes(Input::get('pelunasan_biaya_catatan'));
			$pelunasan_biaya->pelunasan_biaya_jenis			= Input::get('pelunasan_biaya_jenis');
			$pelunasan_biaya->save();

			Session::flash('message', 'Data pelunasan biaya baru berhasil disimpan');
			return Redirect::to('pelunasan_biaya');
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
