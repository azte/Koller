<?php

	$users = User::all();
	$reports = Report::all();
	$usuarios = User::lists('name', 'id');

?>


@extends('layout')
@section('indexQuerys')
<div class="jumbotron">
	<div class="container container-azt">

{{Form::open(array('route' => 'queryBuilder'), array('role' => 'form'))}}
		<div class="container">
			<h3>Consultas</h3>
			<h4>Usuario</h4>

	
	{{ Form::select('user', array('' => 'Seleccione') + $usuarios,'default',array('class' => 'form-control')) }}
	{{ Form::text('date',null,array('placeholder' => 'AAAA/MM/DD'))}}
	{{ Form::text('store',null,array('placeholder' => 'Tienda'))}}


		
	{{ Form::button('Mostrar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	
{{ Form::close() }}

		</div>
	</div>
</div>
@stop