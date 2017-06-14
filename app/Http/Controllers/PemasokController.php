<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pemasok;
use View;
use Validator;
use Redirect;
use Input;
use Session;

use Illuminate\Http\Request;

class PemasokController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pemasok = Pemasok::all();
		return View::make('mockups.pemasokList')->with('pemasok', $pemasok);
		// return var_dump($pemasok);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.pemasok');
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
			'pemasok_nama' => 'required',
			'pemasok_email' => 'email');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pemasok/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pemasok = new Pemasok;
			$pemasok->pemasok_nama			= Input::get('pemasok_nama');
			$pemasok->pemasok_alamat		= Input::get('pemasok_alamat');
			$pemasok->pemasok_telepon		= Input::get('pemasok_telepon');
			$pemasok->pemasok_kontaklain	= Input::get('pemasok_kontaklain');
			$pemasok->pemasok_email			= Input::get('pemasok_email');
			$pemasok->save();

			Session::flash('message', 'Data pemasok baru berhasil disimpan');
			return Redirect::to('pemasok');
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
