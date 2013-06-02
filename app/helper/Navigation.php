<?php
class Navigation {
	
	
	public static function getNavigation() {
		
		$articles = Article::where('nav_level', '=', '1')->get()->sortBy(function($article) {
			return $article->nav_sort;
		});
		
		$requstUrlInArray = Request::segments();
		$currentId = end($requstUrlInArray);
				
		return View::make('client.navi')
			->with('articles', $articles)
			->with('currentId', $currentId)
			->render();
	}
}
?>