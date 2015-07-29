<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\AdminBaseController;

/**
 * Class AdminArticleController
 * @package App\Http\Controllers\Admin
 */
class AdminArticleController extends AdminBaseController
{

	protected function modelName()
	{
		return \App\Models\Article::class;
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