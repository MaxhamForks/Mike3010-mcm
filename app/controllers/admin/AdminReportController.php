<?php

class AdminReportController extends AdminBaseController
{

	protected function modelName()
	{

		return 'Report';
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