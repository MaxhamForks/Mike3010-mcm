<?php

class AdminReportController extends Controller {

	function __construct() {
		
		$this->beforeFilter('auth');
	}
	
	public function getEdit($id) {
		
		$report = Report::find($id);
		
		return View::make('admin.report.editor')->with('report', $report);
	}
	
	public function getCreate() {
		
		return View::make('admin.report.editor');
	}
	
	public function getDelete($id) {
		
		$report = Report::find($id);
		if(isset($report)) {
			$report->delete();
		}
		
		return Redirect::to('reports');
	}
	
	public function postSave() {
		
		$input = Input::all();
		$validator = Validator::make($input,array(
			'title' => 'required',
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
 			return Redirect::to('reports/create');
		}
		
		//ändern oder neu?
		$reportId = $input['id'];
		$report = Report::find($reportId);
		
		if(!isset($report)) {
			$report = new Report();
		}
		
		$report->fill($input);
		$report->save();
		
		return Redirect::to('reports');
	}
	
	public function getIndex() {
		
		$reports = Report::with('Categorie')->get()->sortBy(function($report) {
			return $report->created_at;
		})->reverse();
		
		return View::make('admin.report.overview')->with('reports', $reports);
	}
}