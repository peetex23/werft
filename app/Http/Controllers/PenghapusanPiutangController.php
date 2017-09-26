<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PenghapusanPiutang;
use App\Pelanggan;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenghapusanPiutangController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$penghapusan_piutang = DB::table('trn_penghapusan_piutang')
					->join('tb_pelanggan', 'tb_pelanggan.id', '=', 'trn_penghapusan_piutang.id_pelanggan')
					->get();
		return View::make('mockups.penghapusan_piutangList')->with('penghapusan_piutang', $penghapusan_piutang);
		// return var_dump($penghapusan_piutang);
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
		return View::make('mockups.penghapusan_piutang')->with('pelanggan', $pelanggan);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('penghapusan_piutang_jumlah' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/penghapusan_piutang/create')
				->withErrors($validator)
				->withInput();
		} else {
			$penghapusan_piutang = new PenghapusanPiutang;
			$penghapusan_piutang->penghapusan_piutang_jumlah	= StripCurrency(Input::get('penghapusan_piutang_jumlah'));
			$penghapusan_piutang->id_pelanggan					= Input::get('id_pelanggan');
			$penghapusan_piutang->penghapusan_piutang_tanggal	= Carbon::createFromFormat('d-m-Y', Input::get('penghapusan_piutang_tanggal'));
			$penghapusan_piutang->penghapusan_piutang_catatan	= addslashes(Input::get('penghapusan_piutang_catatan')) ;
			$penghapusan_piutang->save();

			Session::flash('message', 'Data penghapusan piutang baru berhasil disimpan');
			return Redirect::to('penghapusan_piutang');
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
