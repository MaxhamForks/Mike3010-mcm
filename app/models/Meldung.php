<?php

class Meldung extends Eloquent {

	protected $table = 'meldungen';
	protected $fillable = array('title', 'text', 'categorie_id', 'sort');
	protected $guarded = array('id');
	
	public function categorie() {
		
		return $this->belongsTo('Categorie');
	}
}