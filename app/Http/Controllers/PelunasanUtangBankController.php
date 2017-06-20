<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PelunasanUtangBank;
use App\Bank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelunasanUtangBankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pelunasan_utang_bank = DB::table('trn_pelunasan_utang_bank')
					->join('tb_bank', 'tb_bank.id', '=', 'trn_pelunasan_utang_bank.id_bank')
					->get();
		return View::make('mockups.pelunasan_utang_bankList')->with('pelunasan_utang_bank', $pelunasan_utang_bank);
		// return var_dump($pelunasan_utang_bank);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$bank = Bank::all();
		return View::make('mockups.pelunasan_utang_bank')->with('bank', $bank);
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
			'pelunasan_utang_bank_jumlah_pokok' => 'required',
			'pelunasan_utang_bank_jumlah_bunga' => 'required',
			'pelunasan_utang_bank_metode_bayar' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pelunasan_utang_bank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pelunasan_utang_bank = new PelunasanUtangBank;
			$pelunasan_utang_bank->pelunasan_utang_bank_jumlah_pokok	= StripCurrency(Input::get('pelunasan_utang_bank_jumlah_pokok'));
			$pelunasan_utang_bank->pelunasan_utang_bank_jumlah_bunga	= StripCurrency(Input::get('pelunasan_utang_bank_jumlah_bunga'));
			$pelunasan_utang_bank->pelunasan_utang_bank_metode_bayar 	= Input::get('pelunasan_utang_bank_metode_bayar');
			$pelunasan_utang_bank->id_bank				= Input::get('id_bank');
			$pelunasan_utang_bank->pelunasan_utang_bank_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('pelunasan_utang_bank_tanggal'));
			$pelunasan_utang_bank->pelunasan_utang_bank_catatan			= addslashes(Input::get('pelunasan_utang_bank_catatan')) ;
			$pelunasan_utang_bank->save();

			Session::flash('message', 'Data pelunasan utang bank baru berhasil disimpan');
			return Redirect::to('pelunasan_utang_bank');
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
