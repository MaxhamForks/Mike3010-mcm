<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Report;

/**
 * Class ReportController
 * @package App\Http\Controllers\Client
 */
class ReportController extends Controller
{

	public function getOverview($id)
	{

		$article = Article::find($id);
		if (!isset($article) or $article->handlerPage->handler != 'report/overview/') {

			return Redirect::to('/');
		}

		$reports = Report::where('categorie_id', '=', $article->categorie_id)->get()->sortBy(function ($report) {
			return $report->created_at;
		});

		return view('client.reportOverview')->with('reports', $reports);
	}

	public function getShow($id)
	{

		$report = Report::find($id);

		if (!isset($report)) {

			return Redirect::to('/');
		}

		return view('client.report')->with('report', $report);
	}
}