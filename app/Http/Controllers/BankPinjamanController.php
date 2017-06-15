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

class BankPinjamanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$bank = Bank::all()->where('bank_pinjaman', 'y');
		return View::make('mockups.bank_pinjamanList')->with('bank', $bank);
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
		return View::make('mockups.bank_pinjaman');
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
			'bank_nama' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/bank_pinjaman/create')
				->withErrors($validator)
				->withInput();
		} else {
			$bank = new Bank;
			$bank->bank_nama			= Input::get('bank_nama');
			$bank->bank_pinjaman		= 'y';
			$bank->save();

			Session::flash('message', 'Data bank pinjaman baru berhasil disimpan');
			return Redirect::to('bank_pinjaman');
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
