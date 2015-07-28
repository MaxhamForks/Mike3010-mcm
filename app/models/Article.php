<?php

class Article extends Eloquent
{

	protected $fillable = array('parent_id', 'handler_page_id', 'title', 'text', 'nav_title', 'nav_kz', 'nav_sort', 'nav_level', 'categorie_id');
	protected $guarded = array('id');

	public function handlerPage()
	{

		return $this->belongsTo('HandlerPage');
	}

	public function categorie()
	{

		return $this->belongsTo('Categorie');
	}

	public function formattedNavigation()
	{

		return $this->nav_kz == 'J' ? 'Ja' : 'Nein';
	}

	public function parentArticle()
	{

		return $this->belongsTo('Article', 'parent_id');
	}

	public function children()
	{

		return $this->hasMany('Article', 'parent_id');
	}
}