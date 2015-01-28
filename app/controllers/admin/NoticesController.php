<?php

class Admin_NoticesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = Notice::all();
        return View::make('admin/notices/show')->with('news', $news);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$notice = new Notice;
    	return View::make('admin/notices/form')->with('notice', $notice);	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		

		$notice = new Notice;

		$id = Auth::user()->id;
		$notice->user_id = $id;

        // Obtenemos la data enviada por el usuario
        $data = Input::all();

     	 
        // Revisamos si la data es válido
        if ($notice->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $notice->fill($data);
            // Guardamos el usuario
            $notice->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            $notices = Notice::all();
            return View::make('home')->with('notices', $notices);
            // return Redirect::route('admin.notices.create');
        }
        else
        {
            // En caso de error regresa a la acción create con los datos y los errores encontrados
			return Redirect::route('admin.notices.create')->withInput()->withErrors($notice->errors);
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
