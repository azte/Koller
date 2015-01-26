@extends('layout')
@section('formNotice')

<div class="jumbotron">
	<div class="container">


	{{Form::model($notice, array('route' => 'admin.notices.store', 'method' => 'POST'), array('role' => 'form'))}}
		  @include ('admin/errors', array('errors' => $errors))
		<div class="row">
		  	<div class="form-group col-md-4">
		      {{ Form::label('title', 'Titulo') }}
		      {{ Form::text('title',null, array('placeholder' => 'Titulo', 'class' => 'form-control')) }}        
		    </div>
		  	<div class="form-group col-md-4">
		      {{ Form::label('content', 'Contenido') }}
		      {{ Form::text('content', null, array('placeholder' => 'Contenido', 'class' => 'form-control')) }}        
		    </div>
		    
		  </div>
		  {{ Form::button('Crear', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
		  
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop