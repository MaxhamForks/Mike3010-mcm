<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * @package App\Models
 */
class Categorie extends Model
{

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles()
	{
		return $this->hasMany('App\Models\Article');
	}
}