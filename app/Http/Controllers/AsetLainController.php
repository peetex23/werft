<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asetlain;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Illuminate\Http\Request;

class AsetLainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$aset_lain = Asetlain::all();
		return View::make('mockups.aset_lainList')->with('aset_lain', $aset_lain);
		// return var_dump($aset_lain);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.aset_lain');
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
			'aset_lain_nama' => 'required',
			'aset_lain_nilaiperolehan' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/aset_lain/create')
				->withErrors($validator)
				->withInput();
		} else {
			$aset_lain = new Asetlain;
			$aset_lain->aset_lain_nama			= Input::get('aset_lain_nama');
			$aset_lain->aset_lain_nilaiperolehan= StripCurrency(Input::get('aset_lain_nilaiperolehan'));
			$aset_lain->save();

			Session::flash('message', 'Data aset lain baru berhasil disimpan');
			return Redirect::to('aset_lain');
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
