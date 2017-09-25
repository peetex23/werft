<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PelunasanUtangNonBank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelunasanUtangNonBankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pelunasan_utang_nonbank = DB::table('trn_pelunasan_utang_nonbank')->get();
		return View::make('mockups.pelunasan_utang_nonbankList')->with('pelunasan_utang_nonbank', $pelunasan_utang_nonbank);
		// return var_dump($pelunasan_utang_nonbank);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		// $pelanggan = Pelanggan::all();->with('pelanggan', $pelanggan)
		return View::make('mockups.pelunasan_utang_nonbank');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('pelunasan_utang_nonbank_jumlah' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pelunasan_utang_nonbank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pelunasan_utang_nonbank = new PelunasanUtangNonBank;
			$pelunasan_utang_nonbank->pelunasan_utang_nonbank_jumlah		= StripCurrency(Input::get('pelunasan_utang_nonbank_jumlah'));
			$pelunasan_utang_nonbank->pelunasan_utang_nonbank_metode_bayar	= Input::get('pelunasan_utang_nonbank_metode_bayar');
			$pelunasan_utang_nonbank->pelunasan_utang_nonbank_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('pelunasan_utang_nonbank_tanggal'));
			$pelunasan_utang_nonbank->pelunasan_utang_nonbank_catatan		= addslashes(Input::get('pelunasan_utang_nonbank_catatan')) ;
			$pelunasan_utang_nonbank->save();

			Session::flash('message', 'Data pelunasan utang non-bank baru berhasil disimpan');
			return Redirect::to('/pelunasan_utang_nonbank');
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
