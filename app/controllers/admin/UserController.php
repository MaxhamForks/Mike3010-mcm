<?php

class UserController extends Controller {

	function __construct() {
		
		$this->beforeFilter('auth');
	}
	
	public function getEdit($id) {
		
		$user = User::find($id);
		
		return View::make('admin.user.editor')->with('user', $user);
	}
	
	public function getCreate() {
		
		return View::make('admin.user.editor');
	}
	
	public function getDelete($id) {
		
		$user = User::find($id);
		if(isset($user)) {
			$user->delete();
		}
		
		return Redirect::to('users');
	}
	
	public function postSave() {
		
		$input = Input::all();
		$validator = Validator::make($input,array(
			'username' => 'required',
			'name' => 'required',
			'vorname' => 'required',
			'email' => 'required',
			'password' => 'required',
			'passwordWiederholen' => 'required|same:password',
		));
		
		if ($validator->fails())
		{
			$messages = $validator->messages()->all(':message<br />');
			$infoString = '';
			foreach($messages as $msg) {
				$infoString .= $msg;
			}
				
			Input::flash();
			Session::flash('info', $infoString);
 			return Redirect::to('users/create');
		}
		
		//password hashen
		$input['password'] = Hash::make($input['password']);
		
		//ändern oder neu?
		$userId = $input['id'];
		$user = User::find($userId);
		
		if(!isset($user)) {
			$user = new User();
		}
		
		$user->fill($input);
		$user->save();
		
		return Redirect::to('users');
	}
	
	public function getIndex() {
		
		$users = User::all()->sortBy(function($usr) {
			return strtolower($usr->name.' '.$usr->vorname);
		});
		
		return View::make('admin.user.overview')->with('users', $users);
	}
}