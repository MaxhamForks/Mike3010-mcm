<?php

class AdminArticleController extends AdminBaseController
{

	protected function modelName()
	{

		return 'Article';
	}

	protected function basePath()
	{

		return 'articles';
	}

	protected function sortColumn()
	{

		return 'title';
	}

	protected function validationRules()
	{

		return array(
			'title' => 'required',
		);
	}
}