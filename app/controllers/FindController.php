<?php

class FindController extends BaseController
{

	public function findReport(){


		$id = Input::only('id');

		$report = Report::find($id);
		return View::make('admin/reports/show')->with('report',$report);

	}

}