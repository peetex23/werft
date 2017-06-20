<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PendapatanDimuka;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanDimukaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pendapatan_dimuka = PendapatanDimuka::all();
		return View::make('mockups.pendapatan_dimukaList')->with('pendapatan_dimuka', $pendapatan_dimuka);
		// return var_dump($pendapatan_dimuka);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.pendapatan_dimuka');
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
			'pendapatan_dimuka_jumlah' => 'required', 
			'pendapatan_dimuka_jangka_waktu' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pendapatan_dimuka/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pendapatan_dimuka = new PendapatanDimuka;
			$pendapatan_dimuka->pendapatan_dimuka_jumlah		= StripCurrency(Input::get('pendapatan_dimuka_jumlah'));
			$pendapatan_dimuka->pendapatan_dimuka_jangka_waktu	= StripCurrency(Input::get('pendapatan_dimuka_jangka_waktu'));
			$pendapatan_dimuka->pendapatan_dimuka_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('pendapatan_dimuka_tanggal'));
			$pendapatan_dimuka->pendapatan_dimuka_catatan		= addslashes(Input::get('pendapatan_dimuka_catatan')) ;
			$pendapatan_dimuka->save();

			Session::flash('message', 'Data pendapatan dimuka baru berhasil disimpan');
			return Redirect::to('pendapatan_dimuka');
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
