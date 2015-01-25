<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('showReport')
	

<div class="jumbotron">
	<table class="table table-striped">
	    
	    <tr>
	    	<th>ID</th>
			<th>Tienda</th>
			<th>Usuario</th>
			<th>Fecha</th>
	        
	    </tr>
	    <tr>
	   	
	   	@foreach($report as $reporte)
	   		<td>{{$reporte->id}}</td>
	   		<td>{{$reporte->store}}</td>
	   		<td>{{$reporte->userName}}</td>

	   		<td>{{$reporte->created_at}}</td>

		@endforeach
		</tr>
	  </table>
</div>

@stop