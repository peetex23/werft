<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pelanggan;
use View;
use Validator;
use Redirect;
use Input;
use Session;

use Illuminate\Http\Request;

class PelangganController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pelanggan = Pelanggan::all();
		return View::make('mockups.pelangganList')->with('pelanggan', $pelanggan);
		// return var_dump($pelanggan);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.pelanggan');
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
			'pelanggan_nama' => 'required',
			'pelanggan_email' => 'email'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pelanggan/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pelanggan = new Pelanggan;
			$pelanggan->pelanggan_nama			= Input::get('pelanggan_nama');
			$pelanggan->pelanggan_alamat		= Input::get('pelanggan_alamat');
			$pelanggan->pelanggan_telepon		= Input::get('pelanggan_telepon');
			$pelanggan->pelanggan_kontaklain	= Input::get('pelanggan_kontaklain');
			$pelanggan->pelanggan_email			= Input::get('pelanggan_email');
			$pelanggan->save();

			Session::flash('message', 'Data pelanggan baru berhasil disimpan');
			return Redirect::to('pelanggan');
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
