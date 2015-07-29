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

Route::get('logout', function () {

	Auth::logout();
	return Redirect::to('/');
});

//admin
Route::controller('admin', 'AdminController');
Route::controller('login', 'LoginController');
Route::controller('users', 'UserController');
Route::controller('articles', 'AdminArticleController');
Route::controller('reports', 'AdminReportController');
Route::controller('meldungen', 'AdminMeldungController');

//client
Route::controller('article', 'ArticleController');
Route::controller('report', 'ReportController');
Route::controller('/', 'ClientController');
