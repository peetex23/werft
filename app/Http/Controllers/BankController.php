<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bank;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Illuminate\Http\Request;

class BankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$bank = Bank::all()->where('bank_pinjaman', 'n');
		return View::make('mockups.bankList')->with('bank', $bank);
		// return var_dump($bank);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.bank');
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
			'bank_nama' => 'required',
			'bank_nomor_rek' => 'required',
			'bank_jenis_rek' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/bank/create')
				->withErrors($validator)
				->withInput();
		} else {
			$bank = new Bank;
			$bank->bank_nama			= Input::get('bank_nama');
			$bank->bank_jenis_rek		= Input::get('bank_jenis_rek');
			$bank->bank_nomor_rek		= Input::get('bank_nomor_rek');
			$bank->bank_pinjaman		= 'n';
			$bank->save();

			Session::flash('message', 'Data bank baru berhasil disimpan');
			return Redirect::to('bank');
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
