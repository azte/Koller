<link href="{{ asset('style.css')}}" rel="stylesheet">


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
			<div class="row">		

				{{ Form::label('user', 'Usuario') }}
				{{ Form::select('user', array('' => 'Seleccione') + $usuarios,'default',array('class' => 'form-control')) }}
				{{ Form::label('store', 'Tienda') }}
				{{ Form::text('store',null,array('placeholder' => 'Tienda','class' => 'form-control'))}}

				{{ Form::label('date', 'Día Específico') }}

				{{ Form::text('date',null,array('placeholder' => 'AAAA/MM/DD','class' => 'form-control'))}}
				<h5>Rango</h5>
				<div class="col-lg-6 col-md-6">	
				{{ Form::text('start_date',null,array('placeholder' => 'Fecha de Inicio','class' => 'form-control'))}}
				</div>
				<div class="col-lg-6 col-md-6">
				{{ Form::text('end_date',null,array('placeholder' => 'Fecha Final','class' => 'form-control'))}}
				</div>
			


		
				{{ Form::button('Mostrar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
			</div>
{{ Form::close() }}

		</div>
	</div>
</div>
@stop