<?php

class QueryController extends BaseController
{
	
	public function index()
	{
		return View::make('admin/reports/indexQuerys');
	}


	public function query()
	{

		$query = DB::table('reports');

		if(Input::has('user')){
		  
		  $user = Input::get('user');
		  $query->where('user_id', '=', $user);
		}

		if(Input::has('store')){
		  
		  $store = Input::get('store');
		  $query->where('store', '=', $store);
		}

		if(Input::has('date')){
		  
		  $date = Input::get('date');
		  $query->where('created_at', 'like', "%$date%");
		  
		}


		$reports = $query->get();
		return View::make('admin/reports/showQuerys')->with('reports', $reports);



	}
}
