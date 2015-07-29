<?php



Route::get('logout', function () {

	Auth::logout();
	return Redirect::to('/');
});

//admin
Route::controller('admin', 'Admin\AdminController');
Route::controller('login', 'Admin\LoginController');
Route::controller('users', 'Admin\UserController');
Route::controller('articles', 'Admin\AdminArticleController');
Route::controller('reports', 'Admin\AdminReportController');
Route::controller('meldungen', 'Admin\AdminMeldungController');

//client
Route::controller('article', 'Client\ArticleController');
Route::controller('report', 'Client\ReportController');
Route::controller('/', 'Client\ClientController');
