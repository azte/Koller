@extends('layout')
@section('users')

<div class="jumbotron">
	<div class="container">
		
		<div>
			<h2>BÚSQUEDA</h2>
		</div>

	{{ Form::open(array('route' => 'find', 'method' => 'POST'), array('role' => 'form')) }}

	  	<div class="row">
		    <div class="form-group col-md-2">
		     
		      	{{ Form::text('id', null, array('placeholder' => 'ID', 'class' => 'form-control')) }}
	    	</div>
	    	<div class="form-group col-md-1">

	  			{{ Form::button('BUSCAR', array('type' => 'submit', 'class' => 'btn btn-primary btn-sm')) }}    
	  
				{{ Form::close() }}


	    	</div>
	    	<div class="form-group col-md-1">
	    		<a class='btn btn-primary btn-sm' href="{{route('query')}}">CONSULTAS</a>
	    	</div>

	    </div>



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