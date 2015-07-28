<?php

abstract class AdminBaseController extends Controller
{

	function __construct()
	{

		$this->beforeFilter('auth');
	}

	/**
	 *
	 * @return string Name des Models
	 */
	abstract protected function modelName();

	/**
	 *
	 * @return string Route des Controllers
	 */
	abstract protected function basePath();

	/**
	 *
	 * @return string Spalte nach der Sortiert wird
	 */
	abstract protected function sortColumn();

	protected function editorView()
	{

		return 'admin.' . strtolower($this->modelName()) . '.editor';
	}

	protected function listView()
	{

		return 'admin.' . strtolower($this->modelName()) . '.list';
	}

	/**
	 *
	 * @return array Validation Rules
	 */
	abstract protected function validationRules();

	public function getEdit($id)
	{

		$obj = call_user_func($this->modelName() . "::find", $id);

		return View::make($this->editorView())->with(strtolower($this->modelName()), $obj);
	}

	public function getCreate()
	{

		return View::make($this->editorView());
	}

	public function getDelete($id)
	{

		$obj = call_user_func($this->modelName() . "::find", $id);
		if (isset($obj)) {
			$obj->delete();
		}

		return Redirect::to($this->basePath());
	}

	public function postSave()
	{

		$input = Input::all();
		$validator = Validator::make($input, $this->validationRules());

		if ($validator->fails()) {
			$messages = $validator->messages()->all(':message<br />');
			$infoString = '';
			foreach ($messages as $msg) {
				$infoString .= $msg;
			}

			Input::flash();
			Session::flash('info', $infoString);
			return Redirect::to($this->basePath() . '/create');
		}

		//ändern oder neu?
		$id = $input['id'];
		$obj = call_user_func($this->modelName() . "::find", $id);

		if (!isset($obj)) {
			$objName = $this->modelName();
			$obj = new $objName();
		}

		$obj->fill($input);
		$obj->save();

		return Redirect::to($this->basePath());
	}

	public function getIndex()
	{

		$sortBy = $this->sortColumn();
		$objs = call_user_func($this->modelName() . "::all")->sortBy(function ($obj) use ($sortBy) {

			return strtolower($obj->$sortBy);
		});

		return View::make($this->listView())->with(strtolower($this->modelName() . 's'), $objs);
	}
}