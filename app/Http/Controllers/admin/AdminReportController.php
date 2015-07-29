<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\AdminBaseController;

/**
 * Class AdminReportController
 * @package App\Http\Controllers\Admin
 */
class AdminReportController extends AdminBaseController
{

	protected function modelName()
	{
		return \App\Models\Report::class;
	}

	protected function basePath()
	{
		return 'reports';
	}

	protected function sortColumn()
	{
		return 'created_At';
	}

	protected function validationRules()
	{
		return array(
			'title' => 'required',
		);
	}
}