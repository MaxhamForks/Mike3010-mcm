<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 * @package App\Models
 */
class Report extends Model
{

	protected $fillable = ['title', 'text', 'categorie_id'];
	protected $guarded = ['id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function categorie()
	{
		return $this->belongsTo('App\Models\Categorie');
	}
}