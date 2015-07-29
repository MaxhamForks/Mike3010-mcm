<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{

	function __construct()
	{
		$this->beforeFilter('auth');
	}

	public function getIndex()
	{
		return view('admin.home');
	}
}