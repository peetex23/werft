<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aset;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Illuminate\Http\Request;

class AsetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$aset = Aset::all();
		return View::make('mockups.asetList')->with('aset', $aset);
		// return var_dump($aset);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.aset');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('aset_nama' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/aset/create')
				->withErrors($validator)
				->withInput();
		} else {
			$aset = new Aset;
			$aset->aset_nama			= Input::get('aset_nama');
			$aset->aset_kelompok		= Input::get('aset_kelompok');
			$aset->aset_masa_manfaat	= Input::get('aset_masa_manfaat');
			$aset->aset_harga			= StripCurrency(Input::get('aset_harga'));
			$aset->save();

			Session::flash('message', 'Data aset baru berhasil disimpan');
			return Redirect::to('aset');
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
