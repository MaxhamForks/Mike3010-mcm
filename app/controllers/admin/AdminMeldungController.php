<?php

class AdminMeldungController extends Controller {

	function __construct() {
		
		$this->beforeFilter('auth');
	}
	
	public function getEdit($id) {
		
		$meldung = Meldung::find($id);
		
		return View::make('admin.meldung.editor')->with('meldung', $meldung);
	}
	
	public function getCreate() {
		
		return View::make('admin.meldung.editor');
	}
	
	public function getDelete($id) {
		
		$meldung = Meldung::find($id);
		if(isset($meldung)) {
			$meldung->delete();
		}
		
		return Redirect::to('meldungen');
	}
	
	public function postSave() {
		
		$input = Input::all();
		$validator = Validator::make($input,array(
			'title' => 'required',
			'sort' => 'required',
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
 			return Redirect::to('meldungen/create');
		}
		
		//ändern oder neu?
		$meldungId = $input['id'];
		$meldung = Meldung::find($meldungId);
		
		if(!isset($meldung)) {
			$meldung = new Meldung();
		}
		
		$meldung->fill($input);
		$meldung->save();
		
		return Redirect::to('meldungen');
	}
	
	public function getIndex() {
		
		$meldungen = Meldung::with('Categorie')->get()->sortBy(function($meldung) {
			return $meldung->sort;
		});
		
		return View::make('admin.meldung.overview')->with('meldungen', $meldungen);
	}
}