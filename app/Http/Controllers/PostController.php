<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\Post;

class PostController extends Controller {

	public function getShow($slug)
	{
		// echo $slug;
		$post = Post::where('slug', '=', $slug)->firstorFail();

		// return View::make('post.show')->with('post', $post);
		return view('posts.show')->with('post', $post);
		// return response($content)->withCookie(cookie('name', 'value'));
	}

}
