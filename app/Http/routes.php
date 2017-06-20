<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('mockups.login');
});

Route::get('/login', function()
{
	return View::make('mockups.login');
});

Route::get('/form', function() {
	return View::make('form');
});

Route::get('/notifications', function() {
	return View::make('notifications');
});

Route::get('/buttons', function() {
	return View::make('buttons');
});

Route::get('/table', function() {
	return View::make('table');
});

Route::get('/mockups/{page}', 'MockupController@showPage');

Route::resource('pelanggan', 'PelangganController');

Route::resource('pemasok', 'PemasokController');

Route::resource('aset', 'AsetController');

Route::resource('biaya_lain', 'BiayaLainController');

Route::resource('bank', 'BankController');

Route::resource('bank_pinjaman', 'BankPinjamanController');

Route::resource('aset_lain', 'AsetLainController');

Route::resource('saldo', 'SaldoAwalController');

Route::resource('jasa_tunai', 'JasaTunaiController');

Route::resource('pembayaran_piutang', 'PembayaranPiutangController');

Route::resource('pembayaran_aset', 'PembayaranAsetController');

Route::resource('utang_bank', 'UtangBankController');

Route::resource('utang_nonbank', 'UtangNonbankController');

Route::resource('modal_uang', 'ModalUangController');

Route::resource('modal_barang', 'ModalBarangController');

Route::resource('penarikan_bank', 'PenarikanBankController');

Route::resource('pendapatan_dimuka', 'PendapatanDimukaController');