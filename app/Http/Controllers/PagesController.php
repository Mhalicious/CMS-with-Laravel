<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{

		return view('pages.home');//in der Klammer gebe ich an welche page im "views" Ordner gesehen werden soll / .home.blade.php wird im "pages" Ordner gesucht dann

	}

	public function about()
	{

		return view('pages.about');
	}

}
