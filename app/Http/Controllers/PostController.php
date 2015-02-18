<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

	public function getShow($slug)
	{
		echo $slug;
	}

}
