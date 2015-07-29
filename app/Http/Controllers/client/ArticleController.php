<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Base
 */
class ArticleController extends Controller
{

	public function getShow($id)
	{

		$article = Article::find($id);

		if (!isset($article) or $article->handlerPage->handler != 'article/show/') {

			return Redirect::to('/');
		}

		return view('client.article')->with('article', $article);
	}
}