<?php

class Admin_ReportsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		
/*		$users = User::where('votes', '>', 100)->take(10)->get();

foreach ($users as $user)
{
    var_dump($user->name);
}
		
*/
		
		// $reports = Dato::where('DET','=','250')->get();


		$id = Auth::user()->id;
		$reports = Report::where('user_id','=', $id)->get();
		return View::make('admin/reports/reports')->with('reports', $reports);

	
	}


	/**s
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin/reports/reports');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{



			
			// $store = Dato::where('DET','=','250')->firstOrFail();
			// $tiendaBd = $store->DET;

			$report = new Report;
			$id = Auth::user()->id;
			$report->user_id = $id;
			
			$data = Input::only('userName','store','comment','ticket','type','subtype');
			// $tienda = $data['store'];
			
			if ($report->validarDatosReporte($data))
			{

				$report->fill($data);
				$report->save();
				return Redirect::route('admin.reports.index')->with('report',$report);

				
			}
			else
			{
				return Redirect::route('admin.reports.index')->withInput()->withErrors($report->errors);
	
			}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
