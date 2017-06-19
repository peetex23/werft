<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Utangbank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtangNonbankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$utang_nonbank = DB::table('trn_utang')->where('utang_bank','=','n')->get();
		return View::make('mockups.utang_nonbankList')->with('utang_nonbank', $utang_nonbank);
		// return var_dump($utang_nonbank);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.utang_nonbank');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('utang_jumlahpokok' => 'required', 'utang_metode_bayar' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/utang_nonbank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$utang_nonbank = new Utangbank;
			$utang_nonbank->utang_jumlahpokok	= StripCurrency(Input::get('utang_jumlahpokok'));
			$utang_nonbank->utang_metode_bayar	= Input::get('utang_metode_bayar');
			$utang_nonbank->utang_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('utang_tanggal'));
			$utang_nonbank->utang_catatan 		= addslashes(Input::get('utang_catatan'));
			$utang_nonbank->utang_bank			= 'n';
			$utang_nonbank->save();

			Session::flash('message', 'Data utang non bank baru berhasil disimpan');
			return Redirect::to('utang_nonbank');
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
