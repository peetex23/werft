<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modalbarang;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModalBarangController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$modal_barang = Modalbarang::all();
		return View::make('mockups.modal_barangList')->with('modal_barang', $modal_barang);
		// return var_dump($modal_barang);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('mockups.modal_barang');
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
			'modal_barang_nama' => 'required',
			'modal_barang_nilai_perolehan' => 'required',
			'modal_barang_masa_manfaat' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/modal_barang/create')
				->withErrors($validator)
				->withInput();
		} else {
			$modal_barang = new Modalbarang;
			$modal_barang->modal_barang_nama			= Input::get('modal_barang_nama');
			$modal_barang->modal_barang_nilai_perolehan	= StripCurrency(Input::get('modal_barang_nilai_perolehan'));
			$modal_barang->modal_barang_masa_manfaat	= StripCurrency(Input::get('modal_barang_masa_manfaat'));
			$modal_barang->modal_barang_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('modal_barang_tanggal'));
			$modal_barang->modal_barang_catatan			= addslashes(Input::get('modal_barang_catatan')) ;
			$modal_barang->save();

			Session::flash('message', 'Data modal barang baru berhasil disimpan');
			return Redirect::to('modal_barang');
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
