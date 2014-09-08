<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('reports')

<div class="jumbotron">
	<div class="container">
		<h3>Reportes<h3>
		
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>Reporte</th>
					<th>Usuario</th>
					<th>Tienda</th>
					<th>Comentarios</th>
					<th>Ticket</th>
					<th>Tipo</th>
					<th>Subtipo</th>
					<th>Fecha</th>
					

				</tr>
				<tr>

					@foreach($reports as $report)
					
					<tr>
						<td>{{$report->id}}</td>
						<td>{{$report->userName}}</td>
						<td>{{$report->store}}</td>
						<td>{{$report->comment}}</td>
						<td>{{$report->ticket}}</td>
					</tr>
					



					@endforeach


				</tr>
				
			</table>
		</div>	
	</div>
	
</div>	
				
		



@stop
@section('formReport')
<div class="container">
<h3>Ingresar Reporte</h3>
	<div class="container container-azt">

		{{ Form::open(array('route' => 'admin.reports.store', 'method' => 'POST'), array('role' => 'form')) }}

	  <div class="row">
	    <div class="form-group col-md-4">
	      {{ Form::label('userName', 'Usuario') }}
	      {{ Form::text('userName', null, array('placeholder' => 'Usuario', 'class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-4">
	      {{ Form::label('store', 'Tienda') }}
	      {{ Form::text('store', null, array('placeholder' => 'Tienda', 'class' => 'form-control')) }}        
	    </div>
	  </div>
	  <div class="row">
	    <div class="form-group col-md-4">
	      {{ Form::label('comment', 'Comentarios') }}
	      {{ Form::text('comment', null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-4">
	      {{ Form::label('ticket', 'Ticket') }}
	      {{ Form::text('ticket',null, array('class' => 'form-control')) }}
	    </div>

	  </div>
	  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	  
	{{ Form::close() }}
	</div>
</div>
@stop


