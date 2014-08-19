@extends ('layout')


<?php

    if ($user->exists):
        $form_data = array('route' => array('admin.users.update', $user->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'admin.users.store', 'method' => 'POST');
        $action    = 'Crear';        
    endif;

?>






@section ('title') {{$action}} usuario @stop




@section ('formUsers') <!-- Este contenido se modifico -->



<div class="jumbotron">

	<!-- @if ($errors->any())
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Por favor corrige los siguentes errores:</strong>
      <ul>
      @foreach ($errors->all() as $error)
      @endforeach
        <li>{{ $error }}</li>
      </ul>
    </div>
  @endif
 -->
	
</div>

	<h1>{{$action}} Usuario</h1>
	<div class="container">
	{{-- Reemplazamos Form::open por Form::model: --}}
@if ($action == 'Editar')  
{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}
@endif

	{{ Form::model($user, $form_data, array('role' => 'form')) }}
	  @include ('admin/errors', array('errors' => $errors))


	  <div class="row">
	  	<div class="form-group col-md-4">
	      {{ Form::label('name', 'Nombre completo') }}
	      {{ Form::text('name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
	    </div>
	    <div class="form-group col-md-4">
	      {{ Form::label('type', 'Usuario/Administrador') }}
	      {{ Form::select('type', array('1' => 'Usuario', '2' => 'Admin'), array('class' => 'form-control') ) }}
	    </div>
	   	</div>
	  <div class="row">
	    <div class="form-group col-md-4">
	      {{ Form::label('password', 'Contraseña') }}
	      {{ Form::password('password', array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-4">
	      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
	      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
	    </div>
	  </div>
	  {{ Form::button($action. ' Usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	  
	{{ Form::close() }}
	</div>
@stop