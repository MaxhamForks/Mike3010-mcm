<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{

	protected $fillable = ['parent_id', 'handler_page_id', 'title', 'text', 'nav_title',
		'nav_kz', 'nav_sort', 'nav_level', 'categorie_id'];

	protected $guarded = ['id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function handlerPage()
	{
		return $this->belongsTo('App\Models\HandlerPage');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function categorie()
	{
		return $this->belongsTo('App\Models\Categorie');
	}

	/**
	 * @return string
	 */
	public function formattedNavigation()
	{
		return $this->nav_kz == 'J' ? 'Ja' : 'Nein';
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parentArticle()
	{
		return $this->belongsTo('App\Models\Article', 'parent_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function children()
	{
		return $this->hasMany('App\Models\Article', 'parent_id');
	}
}