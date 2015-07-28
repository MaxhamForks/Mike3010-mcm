<?php

class AdminMeldungController extends AdminBaseController
{

	protected function modelName()
	{

		return 'Meldung';
	}

	protected function basePath()
	{

		return 'meldungen';
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