<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('showNews')
<div class="jumbotron">
	<p>
		<a href="{{ route('admin.notices.create') }}" class="btn btn-primary">Crear Aviso</a>
  	</p>
  
	<table class="table table-striped">
	    
	    <tr>
	    	<th>ID</th>
			<th>Titulo</th>
			<th>Propietario<th>
			<th>Contenido</th>
			<th>Fecha</th>

	        
	    </tr>
	    <tr>
	   	
	   	
		</tr>
	  </table>
</div>

@stop

