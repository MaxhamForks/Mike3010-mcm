<?php

class ArticleController extends Controller
{

	public function getShow($id)
	{

		$article = Article::find($id);

		if (!isset($article) or $article->handlerPage->handler != 'article/show/') {

			return Redirect::to('/');
		}

		return View::make('client.article')->with('article', $article);
	}
}