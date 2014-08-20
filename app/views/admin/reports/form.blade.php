@extends('layout')
@section('formReport')


<div class="jumbotron">
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
	    <div class="form-group col-md-4">
	      {{ Form::label('user_id', 'ID usuario') }}
	      {{ Form::text('user_id',null, array('class' => 'form-control')) }}
	    </div>
	  </div>
	  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	  
	{{ Form::close() }}
</div>

		

		

					
		
</div>
@stop
