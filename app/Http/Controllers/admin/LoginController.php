<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class LoginController
 * @package App\Http\Controllers\Admin
 */
class LoginController extends Controller
{

	public function getIndex()
	{
		return view('admin.login');
	}

	public function postLogin()
	{

		$username = \Input::get('username');
		$password = \Input::get('password');

		$loginData = array('username' => $username, 'password' => $password);

		$validator = \Validator::make($loginData, array('username' => 'required', 'password' => 'required'));

		if ($validator->fails()) {
			$messages = $validator->messages()->all(':message<br />');
			$infoString = '';
			foreach ($messages as $msg) {
				$infoString .= $msg;
			}

			\Input::flash();
			\Session::flash('info', $infoString);
			return Redirect::to('login');
		}

		if (\Auth::attempt($loginData)) {

			return \Redirect::to('admin');
		} else {

			$infoString = 'Die von Ihnen eingegeben Login Daten sind nicht gültig!';
			\Input::flash();
			\Session::flash('info', $infoString);
			return \Redirect::to('login');
		}
	}
}