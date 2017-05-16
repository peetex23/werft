<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MockupController extends Controller {

	public function showPage($page='index')
	{
		return view("mockups.$page");
	}

}
