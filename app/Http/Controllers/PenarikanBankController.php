<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Penarikanbank;
use App\Bank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenarikanBankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$penarikan_bank = DB::table('trn_penarikan_bank')
					->join('tb_bank', 'tb_bank.id', '=', 'trn_penarikan_bank.id_bank')
					->get();
		return View::make('mockups.penarikan_bankList')->with('penarikan_bank', $penarikan_bank);
		// return var_dump($penarikan_bank);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$bank = DB::table('tb_bank')->where('bank_pinjaman', '=', 'n')->get();
		return View::make('mockups.penarikan_bank')->with('bank', $bank);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('penarikan_bank_jumlah' => 'required', 'penarikan_bank_flag' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/penarikan_bank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$penarikan_bank = new Penarikanbank;
			$penarikan_bank->penarikan_bank_jumlah		= StripCurrency(Input::get('penarikan_bank_jumlah'));
			$penarikan_bank->penarikan_bank_asalbank	= Input::get('penarikan_bank_asalbank');
			$penarikan_bank->penarikan_bank_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('penarikan_bank_tanggal'));
			$penarikan_bank->penarikan_bank_catatan		= addslashes(Input::get('penarikan_bank_catatan')) ;
			$penarikan_bank->penarikan_bank_flag		= Input::get('penarikan_bank_flag');
			$penarikan_bank->id_bank 					= Input::get('id_bank'); 
			$penarikan_bank->save();

			Session::flash('message', 'Data penarikan bank baru berhasil disimpan');
			return Redirect::to('penarikan_bank');
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
