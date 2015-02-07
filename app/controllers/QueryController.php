<?php

class QueryController extends BaseController
{
	
	public function index()
	{
		return View::make('admin/reports/indexQuerys');
	}


	public function query()
	{
		
		$user = Input::get('user');
		$date = Input::get('date');
		$store = Input::get('store');
		

        $reports = DB::table('reports')
                    ->Where('user_id', '=',$user)
                    ->Where('created_at', 'LIKE',"%$date%")
                    ->Where('store', '=',$store)

                    ->get();
		
		

		// $reports = Report::where('user_id','=',$user)->where('created_at','LIKE',"%$date%")->where('store','=',$store)->get();
		
		return View::make('admin/reports/showQuerys')->with('reports', $reports);






	}
}
