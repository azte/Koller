@extends('layout')



<?php

    if ($notice->exists):
        $form_data = array('route' => array('admin.notices.update', $notice->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'admin.notices.store', 'method' => 'POST');
        $action    = 'Crear';        
    endif;

?>





@section('formNotice')

<div class="jumbotron">
	<div class="container">

	<H2>AVISO</H2>
	{{Form::model($notice, $form_data, array('role' => 'form'))}}
		  
		  @include ('admin/errors', array('errors' => $errors))
		
		<div class="row">
		  	<div class="form-group col-md-4">
		      {{ Form::label('title', 'Titulo') }}
		      {{ Form::text('title',null, array('placeholder' => 'Titulo', 'class' => 'form-control')) }}        
		    </div>
		  	<div class="form-group col-md-4">
		      {{ Form::label('content', 'Contenido') }}
		      {{ Form::textarea('content', null, array('placeholder' => 'Contenido', 'class' => 'form-control')) }}        
		    </div>
		    
		  </div>
		  {{ Form::button($action. ' Aviso', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
		  
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop