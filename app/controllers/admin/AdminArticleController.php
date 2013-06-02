<?php

class AdminArticleController extends Controller {

	function __construct() {
		
		$this->beforeFilter('auth');
	}
	
	public function getEdit($id) {
		
		$article = Article::find($id);
		
		return View::make('admin.article.editor')->with('article', $article);
	}
	
	public function getCreate() {

		return View::make('admin.article.editor');
	}
	
	public function getDelete($id) {
		
		$article = Article::find($id);
		if(isset($article)) {
			$article->delete();
		}
		
		return Redirect::to('users');
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
 			return Redirect::to('articles/create');
		}
		
		//ändern oder neu?
		$articleId = $input['id'];
		$article = Article::find($articleId);
		
		if(!isset($article)) {
			$article = new Article();
		}
		
		$article->fill($input);
		$article->save();
		
		return Redirect::to('articles');
	}
	
	public function getIndex() {
		
		$articles = Article::with('Categorie')->with('HandlerPage')->get()->sortBy(function($article) {
			return $article->title;
		});
		
		return View::make('admin.article.overview')->with('articles', $articles);
	}
}