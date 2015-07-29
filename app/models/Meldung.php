<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Meldung
 * @package App\Models
 */
class Meldung extends Model
{

	protected $table = 'meldungen';
	protected $fillable = ['title', 'text', 'categorie_id', 'sort'];
	protected $guarded = ['id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function categorie()
	{
		return $this->belongsTo('App\Models\Categorie');
	}
}