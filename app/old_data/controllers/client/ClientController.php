<?php

class ClientController extends Controller
{

	public function getIndex()
	{

		return View::make('client.home');
	}
}