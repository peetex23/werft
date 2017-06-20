<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PelunasanPembelianKredit;
use App\Pemasok;
use View;
use Validator;
use Redirect;
use Input;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelunasanPembelianKreditController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pelunasan_pembelian_kredit = DB::table('trn_pelunasan_pembelian_kredit')
					->join('tb_pemasok', 'tb_pemasok.id', '=', 'trn_pelunasan_pembelian_kredit.id_pemasok')
					->get();
		return View::make('mockups.pelunasan_pembelian_kreditList')->with('pelunasan_pembelian_kredit', $pelunasan_pembelian_kredit);
		// return var_dump($pelunasan_pembelian_kredit);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$pemasok = Pemasok::all();
		return View::make('mockups.pelunasan_pembelian_kredit')->with('pemasok', $pemasok);
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
			'pelunasan_pembelian_kredit_jumlah' => 'required',
			'pelunasan_pembelian_kredit_metode_bayar' => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/pelunasan_pembelian_kredit/create')
				->withErrors($validator)
				->withInput();
		} else {
			$pelunasan_pembelian_kredit = new PelunasanPembelianKredit;
			$pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_jumlah			= StripCurrency(Input::get('pelunasan_pembelian_kredit_jumlah'));
			$pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_metode_bayar	= StripCurrency(Input::get('pelunasan_pembelian_kredit_metode_bayar'));
			$pelunasan_pembelian_kredit->id_pemasok									= Input::get('id_pemasok');
			$pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_tanggal			= Carbon::createFromFormat('d-m-Y', Input::get('pelunasan_pembelian_kredit_tanggal'));
			$pelunasan_pembelian_kredit->pelunasan_pembelian_kredit_catatan			= addslashes(Input::get('pelunasan_pembelian_kredit_catatan')) ;
			$pelunasan_pembelian_kredit->save();

			Session::flash('message', 'Data pelunasan pembelian kredit baru berhasil disimpan');
			return Redirect::to('pelunasan_pembelian_kredit');
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
