<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pembayaranpiutang;
use App\Pelanggan;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranPiutangController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pembayaran_piutang = DB::table('trn_pembayaran_piutang')
					->join('tb_pelanggan', 'tb_pelanggan.id', '=', 'trn_pembayaran_piutang.id_pelanggan')
					->get();
		return View::make('mockups.pembayaran_piutangList')->with('pembayaran_piutang', $pembayaran_piutang);
		// return var_dump($pembayaran_piutang);
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
		return View::make('mockups.pembayaran_piutang')->with('pelanggan', $pelanggan);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array('pembayaran_piutang_jumlah' => 'required');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pembayaran_piutang/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pembayaran_piutang = new Pembayaranpiutang;
			$pembayaran_piutang->pembayaran_piutang_jumlah		= StripCurrency(Input::get('pembayaran_piutang_jumlah'));
			$pembayaran_piutang->pembayaran_piutang_metode		= Input::get('pembayaran_piutang_metode');
			$pembayaran_piutang->id_pelanggan					= Input::get('id_pelanggan');
			$pembayaran_piutang->pembayaran_piutang_tanggal		= Carbon::createFromFormat('d-m-Y', Input::get('pembayaran_piutang_tanggal'));
			$pembayaran_piutang->pembayaran_piutang_catatan		= addslashes(Input::get('pembayaran_piutang_catatan')) ;
			$pembayaran_piutang->save();

			Session::flash('message', 'Data pembayaran piutang baru berhasil disimpan');
			return Redirect::to('pembayaran_piutang');
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
