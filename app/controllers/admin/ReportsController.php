<?php

class Admin_ReportsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	



	public function index()
	{

		$reports = Report::all();
        return View::make('admin/reports/list')->with('reports', $reports);
	
	}


	/**s
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()


	{


		$id = Auth::user()->id;
		$date = date('Y-m-d');
		var_dump($date);

		$reports = Report::where('user_id','=', $id)->where('created_at','LIKE',"%$date%")->get();
		return View::make('admin/reports/reports')->with('reports', $reports);

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
				return Redirect::route('admin.reports.create')->with('report',$report);

				
			}
			else
			{
				return Redirect::route('admin.reports.create')->withInput()->withErrors($report->errors);
	
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
		
		$idreport = Report::find($id);
		return View::make('admin/reports/showr')->with('idreport', $idreport);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$report = Report::find($id);
		if (is_null ($report))
			{
				App::abort(404);
			}

				return View::make('admin/reports/form')->with('report', $report);	
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			
		
        // Creamos un nuevo objeto para nuestro nuevo usuario
        $report = Report::find($id);

        // Si el usuario no existe entonces lanzamos un error 404 :(
        if (is_null ($report))
        {
            App::abort(404);
        }
        
        // Obtenemos la data enviada por el usuario
        $data = Input::all();
      	if($report->validAndSafe($data))
      		{

				return Redirect::route('admin.reports.show', array($report->id));	
      		}
      	else{

      			return Redirect::route('admin.reports.edit', $report->id)->withInput()->withErrors($report->errors);

      	}


        
        // Revisamos si la data es válido
        
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
