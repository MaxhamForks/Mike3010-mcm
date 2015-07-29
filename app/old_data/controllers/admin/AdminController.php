<?php

class AdminController extends Controller
{

	function __construct()
	{

		$this->beforeFilter('auth');
	}

	public function getIndex()
	{

		return View::make('admin.home');
	}
}