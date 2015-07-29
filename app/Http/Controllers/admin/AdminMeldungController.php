<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\AdminBaseController;

/**
 * Class AdminMeldungController
 * @package App\Http\Controllers\Admin
 */
class AdminMeldungController extends AdminBaseController
{

	protected function modelName()
	{
		return \App\Models\Meldung::class;
	}

	protected function basePath()
	{
		return 'meldung ';
	}

	protected function sortColumn()
	{
		return 'sort';
	}

	protected function validationRules()
	{
		return array(
			'title' => 'required',
			'sort' => 'required',
		);
	}
}