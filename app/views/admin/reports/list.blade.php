@extends('layout')
@section('users')

<div class="jumbotron">
	<div class="container">
		
	  <table class="table table-striped">
	    
	    <tr>
	    	<th>ID</th>
	        <th>Usuario</th>
	        <th>Tienda</th>
			<th>Comentarios</th>
			<th>Ticket</th>
			<th>Tipo</th>
			<th>Subtipo</th>
			<th>Propietario</th>





	        
	    </tr>

	    @foreach($reports as $report)

	    <tr>
	    	<td>{{$report->id}}</td>
	    	<td>{{$report->userName}}</td>
	    	<td>{{$report->store}}</td>
	    	<td>{{$report->comment}}</td>
	    	<td>{{$report->ticket}}</td>
	    	<td>{{$report->type}}</td>
	    	<td>{{$report->subtype}}</td>
	    	<td>{{$report->user_id}}</td>









	        
	        
	    </tr>
	    @endforeach
	    
	  </table>
	</div>
</div>

@stop