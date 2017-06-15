<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Biayalain;
use View;
use Validator;
use Redirect;
use Input;
use Session;

use Illuminate\Http\Request;

class BiayaLainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$biaya_lain = Biayalain::all();
		return View::make('mockups.biaya_lainList')->with('biaya_lain', $biaya_lain);
		// return var_dump($biaya_lain);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.biaya_lain');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('biaya_lain_nama' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/biaya_lain/create')
				->withErrors($validator)
				->withInput();
		} else {
			$biaya_lain = new Biayalain;
			$biaya_lain->biaya_lain_nama			= Input::get('biaya_lain_nama');
			$biaya_lain->biaya_lain_deskripsi		= Input::get('biaya_lain_deskripsi');
			$biaya_lain->save();

			Session::flash('message', 'Data biaya lain baru berhasil disimpan');
			return Redirect::to('biaya_lain');
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
