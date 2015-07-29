<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HandlerPage
 * @package App\Models
 */
class HandlerPage extends Model
{

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles()
	{
		return $this->hasMany('App\Models\Article');
	}
}