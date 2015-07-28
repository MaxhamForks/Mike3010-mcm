<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;

class HandlerPage extends Eloquent
{

	public function articles()
	{

		return $this->hasMany('Article');
	}
}