<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BiayaDimuka;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiayaDimukaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$biaya_dimuka = DB::table('trn_biaya_dimuka')->get();
		return View::make('mockups.biaya_dimukaList')->with('biaya_dimuka', $biaya_dimuka);
		// return var_dump($biaya_dimuka);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.biaya_dimuka');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('biaya_dimuka_jumlah' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/biaya_dimuka/create')
				->withErrors($validator)
				->withInput();
		} else {
			$biaya_dimuka = new BiayaDimuka;
			$biaya_dimuka->biaya_dimuka_jumlah		= StripCurrency(Input::get('biaya_dimuka_jumlah'));
			$biaya_dimuka->biaya_dimuka_metode_bayar= Input::get('biaya_dimuka_metode_bayar');
			$biaya_dimuka->biaya_dimuka_jangkawaktu	= StripCurrency(Input::get('biaya_dimuka_jangkawaktu'));
			$biaya_dimuka->biaya_dimuka_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('biaya_dimuka_tanggal'));
			$biaya_dimuka->biaya_dimuka_catatan		= addslashes(Input::get('biaya_dimuka_catatan')) ;
			$biaya_dimuka->save();

			Session::flash('message', 'Data biaya dibayar dimuka berhasil disimpan');
			return Redirect::to('biaya_dimuka');
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
