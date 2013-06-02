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
	return View::make('hello');
});

Route::get('logout', function() {
	
	Auth::logout();
	return Redirect::to('/');
});

Route::controller('admin', 'AdminController');
Route::controller('login', 'LoginController');
Route::controller('users', 'UserController');
Route::controller('articles', 'AdminArticleController');
Route::controller('reports', 'AdminReportController');
Route::controller('meldungen', 'AdminMeldungController');

/*Route::get('test', function() {
	
	$article = Article::with('parentArticle')->with('Children')->get();
	echo "<pre>";
	var_dump($article);
	
	echo "<br><br><br>";
	
	$queries = DB::getQueryLog();
	var_dump($queries);
	
});*/