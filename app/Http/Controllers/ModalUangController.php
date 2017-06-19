<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modaluang;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModalUangController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$modal_uang = Modaluang::all();
		return View::make('mockups.modal_uangList')->with('modal_uang', $modal_uang);
		// return var_dump($modal_uang);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.modal_uang');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('modal_uang_jumlah' => 'required', 'modal_uang_metode_bayar' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/modal_uang/create')
				->withErrors($validator)
				->withInput();
		} else {
			$modal_uang = new Modaluang;
			$modal_uang->modal_uang_jumlah			= Input::get('modal_uang_jumlah');
			$modal_uang->modal_uang_metode_bayar	= Input::get('modal_uang_metode_bayar');
			$modal_uang->modal_uang_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('modal_uang_tanggal'));
			$modal_uang->modal_uang_catatan			= addslashes(Input::get('modal_uang_catatan')) ;
			$modal_uang->save();

			Session::flash('message', 'Data pembayaran piutang baru berhasil disimpan');
			return Redirect::to('modal_uang');
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
