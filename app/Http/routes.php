<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');
Route::get('/', [
  'as' => 'home',
  'uses' => 'PagesController@index'
  ]);

Route::get('/posts/{slug}',[
  'as' => 'post-show',
  'uses' => 'PostController@getShow'
  ]);

 Route::get('login', 'Auth\AuthController@getLogin');
 Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('home', function ()
{
  return view('admin');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
  ]);

// Route::get('about', 'PagesController@about');
