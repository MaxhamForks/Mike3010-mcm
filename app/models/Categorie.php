<?php

class Categorie extends Eloquent {

	public function articles() {
		
		return $this->hasMany('Article');
	}
}