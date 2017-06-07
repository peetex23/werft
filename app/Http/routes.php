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

Route::get('/buttons', function() {
	return View::make('buttons');
});

Route::get('/table', function() {
	return View::make('table');
});

Route::get('/mockups/{page}', 'MockupController@showPage');
