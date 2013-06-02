<?php

class ReportController extends Controller {
	
	public function getOverview($id) {
		
		$article = Article::find($id);
		if(!isset($article) or $article->handlerPage->handler != 'report/overview/') {
			
			return Redirect::to('/');
		}

		$reports = Report::where('categorie_id', '=', $article->categorie_id)->get()->sortBy(function($report) {
			return $report->created_at;
		});
		
		return View::make('client.reportOverview')->with('reports', $reports);
	}
	
	public function getShow($id) {
		
		$report = Report::find($id);

		if(!isset($report)) {
			
			return Redirect::to('/');
		}
		
		return View::make('client.report')->with('report', $report);
	}
}