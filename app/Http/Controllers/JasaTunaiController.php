<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jasatunai;
use App\Pelanggan;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JasaTunaiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$jasa_tunai = DB::table('trn_jasa_tunai')
					->join('tb_pelanggan', 'tb_pelanggan.id', '=', 'trn_jasa_tunai.id_pelanggan')
					->get();
		return View::make('mockups.jasatunaiList')->with('jasa_tunai', $jasa_tunai);
		// return var_dump($jasa_tunai);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$pelanggan = Pelanggan::all();
		return View::make('mockups.penjualan_jasatunai')->with('pelanggan', $pelanggan);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('jasa_tunai_deskripsi' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/jasa_tunai/create')
				->withErrors($validator)
				->withInput();
		} else {
			$jasa_tunai = new Jasatunai;
			$jasa_tunai->jasa_tunai_deskripsi		= Input::get('jasa_tunai_deskripsi');
			$jasa_tunai->jasa_tunai_biaya			= StripCurrency(Input::get('jasa_tunai_biaya'));
			$jasa_tunai->jasa_tunai_metode			= Input::get('jasa_tunai_metode');
			$jasa_tunai->id_pelanggan				= Input::get('id_pelanggan');
			$jasa_tunai->jasa_tunai_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('jasa_tunai_tanggal'));
			$jasa_tunai->jasa_tunai_catatan			= addslashes(Input::get('jasa_tunai_catatan')) ;
			$jasa_tunai->save();

			Session::flash('message', 'Data jasa_tunai baru berhasil disimpan');
			return Redirect::to('jasa_tunai');
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
