<?php

namespace App\Helper;

use App\Models\Article;

/**
 * Class Navigation
 * @package App\Helper
 */
class Navigation
{
	public static function getNavigation()
	{

		$articles = Article::where('nav_level', '=', '1')->get()->sortBy(function ($article) {
			return $article->nav_sort;
		});

		$requstUrlInArray = \Request::segments();
		$currentId = end($requstUrlInArray);

		return view('client.navi')
			->with('articles', $articles)
			->with('currentId', $currentId)
			->render();
	}
}
