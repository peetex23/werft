<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Saldoawal;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Illuminate\Http\Request;

class SaldoAwalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$saldo = Saldoawal::all();
		return View::make('mockups.saldoList')->with('saldo', $saldo);
		// return var_dump($saldo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.saldo');
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
			'saldo_awal_periode' => 'required',
			'saldo_awal_nilai' => 'required',
			'saldo_awal_akun' => 'unique:mst_saldo_awal,saldo_awal_akun'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/saldo/create')
				->withErrors($validator)
				->withInput();
		} else {
			$saldo = new Saldoawal;
			$saldo->saldo_awal_periode		= Input::get('saldo_awal_periode');
			$saldo->saldo_awal_akun			= Input::get('saldo_awal_akun');
			$saldo->saldo_awal_nilai		= StripCurrency(Input::get('saldo_awal_nilai'));
			$saldo->save();

			Session::flash('message', 'Data saldo baru berhasil disimpan');
			return Redirect::to('saldo');
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
