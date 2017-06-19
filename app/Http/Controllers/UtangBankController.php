<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Utangbank;
use App\Bank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtangBankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$utang = DB::table('trn_utang')
					->join('tb_bank', 'tb_bank.id', '=', 'trn_utang.id_bank')
					->where('utang_bank', '=', 'y')
					->get();
		return View::make('mockups.utang_bankList')->with('utang', $utang);
		// return var_dump($utang);
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
		return View::make('mockups.utang_bank')->with('bank', $bank);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('utang_jumlahpokok' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/utang_bank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$utang = new Utangbank;
			$utang->utang_jumlahpokok	= StripCurrency(Input::get('utang_jumlahpokok'));
			$utang->utang_bunga			= StripCurrency(Input::get('utang_bunga'));
			$utang->utang_jenis_bunga	= Input::get('utang_jenis_bunga');
			$utang->utang_jangka_waktu	= StripCurrency(Input::get('utang_jangka_waktu'));
			$utang->id_bank				= Input::get('id_bank');
			$utang->utang_metode_bayar	= Input::get('utang_metode_bayar');
			$utang->utang_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('utang_tanggal'));
			$utang->utang_bank			= 'y';
			$utang->save();

			Session::flash('message', 'Data pembayaran piutang baru berhasil disimpan');
			return Redirect::to('utang_bank');
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
