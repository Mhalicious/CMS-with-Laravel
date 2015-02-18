<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\Post;

class PagesController extends Controller {

	public function index()
	{

		$posts = Post::where ('draft', '=', 0)->get();

		// print_r($post);

		return view('pages.home')->with('posts', $posts);//in der Klammer gebe ich an welche page im "views" Ordner gesehen werden soll / .home.blade.php wird im "pages" Ordner gesucht dann

	}

	public function about()
	{

		return view('pages.about');
	}

}
