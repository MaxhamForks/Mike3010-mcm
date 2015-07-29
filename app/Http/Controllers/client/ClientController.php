<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

/**
 * Class ClientController
 * @package App\Http\Controllers\Client
 */
class ClientController extends Controller
{

	public function getIndex()
	{
		return view('client.home');
	}
}