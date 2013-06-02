<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class HandlerPage extends Eloquent {

	public function articles() {
	
		return $this->hasMany('Article');
	}
}