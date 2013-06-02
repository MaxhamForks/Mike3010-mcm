<?php

class Report extends Eloquent {

	protected $fillable = array('title', 'text', 'categorie_id');
	protected $guarded = array('id');
	
	public function categorie() {
		
		return $this->belongsTo('Categorie');
	}
}