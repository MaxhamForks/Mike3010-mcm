<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\AdminBaseController;
use App\Models\User;

/**
 * Class UserController
 * @package App\Http\Controllers\Admin
 */
class UserController extends AdminBaseController
{

	protected function modelName()
	{
		return \App\Models\User::class;
	}

	protected function basePath()
	{
		return 'users';
	}

	protected function sortColumn()
	{
		return 'title';
	}

	protected function validationRules()
	{
		return array(
			'username' => 'required',
			'name' => 'required',
			'vorname' => 'required',
			'email' => 'required',
			'password' => 'required',
			'passwordWiederholen' => 'required|same:password',
		);
	}

	public function getIndex()
	{

		//custom sortierung, darum überschrieben
		$users = User::all()->sortBy(function ($usr) {
			return strtolower($usr->name . ' ' . $usr->vorname);
		});

		return view('admin.user.list')->with('users', $users);
	}
}