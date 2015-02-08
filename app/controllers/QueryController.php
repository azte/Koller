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

		if(Input::has('start_date')){
		  
		  $start_date = Input::get('start_date');
		  $query->where('created_at', '>=', $start_date);
		  
		  
		}

		if(Input::has('end_date')){
		  
		  $end_date = Input::get('end_date');
		  $query->where('created_at', '<=', $end_date);
		  
		  
		}






		$reports = $query->get();
		return View::make('admin/reports/showQuerys')->with('reports', $reports);



	}
}
