<link href="{{ asset('style.css')}}" rel="stylesheet">
@extends('layout')
@section('formedit')

<div class="jumbotron">

@if ($errors->any())
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


 <div class="container">
<h3>Editar Reporte</h3>
	<div class="container container-azt">

		{{ Form::model($report, array('route' => array('admin.reports.update',$report->id), 'method' => 'PATCH', 'role' => 'form')) }}

	  <div class="row">
	    <div class="form-group col-md-3">
	      {{ Form::label('userName', 'Usuario') }}
	      {{ Form::text('userName', null, array('placeholder' => 'Usuario', 'class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-3">
	      {{ Form::label('store', 'Tienda') }}
	      {{ Form::text('store', null, array('placeholder' => 'Tienda', 'class' => 'form-control')) }}        
	    </div>
	  </div>
	  <div class="row">
	    <div class="form-group col-md-3">
	      {{ Form::label('comment', 'Comentarios') }}
	      {{ Form::text('comment', null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-3">
	      {{ Form::label('ticket', 'Ticket') }}
	      {{ Form::text('ticket',null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group col-md-3">
	      {{ Form::label('type', 'Tipo') }}
	      {{ Form::select('type', 

	      			array(
	      				   'Seguimiento' => 'Seguimiento',
	      				   'Abandonada' => 'Abandonada',
	      				   'Cortada' => 'Cortada',
	      				   'Informes' => 'Informes',
	      				   'Seguimiento' => 'Seguimiento',
	      				   'Transferencia' => 'Transferencia',
	      				   'Ticket Informativo' => 'Ticket Informativo',
	      				   'Incidente' => 'Incidente',
	      				   'Requerimiento' => 'requerimiento',



	      				   ), 




	      				   null, array('class' => 'form-control'))}}
	</div>
 		<div class="form-group col-md-3">
	      {{ Form::label('subtype', 'Subtipo') }}
	      {{ Form::select('subtype', 


	      			array('Null' => 'Null',
	      				  'Promociones' => 'Promociones',
	      				  'Recargas' => 'Recargas',
	      				  'Extensión' => 'Extension',
	      				  'Error Operativo' => 'Error Operativo',
	      				  'Consityf' => 'Consityf',
	      				  'Recibo' => 'Recibo',
	      				  'Internet Explorer' => 'Internet Explorer',
	      				  'Corte' => 'Corte',
	      				  'IDI' => 'IDI',
	      				  'Arqueo' => 'Arqueo',
	      				  'Inc. Gral. Recibo' => 'Inc. Gral. Recibo',
	      				  'Inc. Gral. Recargas' => 'Inc. Gral. Recargas',
	      				  'Inc. Gral. J&P' => 'Inc. Gral. J&P',
	      				  'TDC/TDD' => 'TDC/TDD',
	      				  'Venezia Pos' => 'Venezia Pos',
	      				  'SIPOS' => 'SIPOS',
	      				  'IVA' => 'IVA',
	      				  'Hoja de Costeo' => 'Hoja de Costeo',
	      				  'Orden De Surtimiento' => 'Orden de Surtimiento',
	      				  'Otros' => 'Otros'









	      				  ), 

	      			null, array('class' => 'form-control'))}}

	  </div>


	  {{ Form::button('Editar Reporte', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	  
	{{ Form::close() }}
	</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

 t = $('#type');
 t.on('change', function(){
 	var tcontent = $('#type').val();
 	if(tcontent == "Informes"){
 		$('#subtype').css('visibility','visible');
 	 }
 	else{

 		$('#subtype').css('visibility','hidden');


 		
 	}

 });
 
	// var type = document.getElementById('type');
	// type.addEventListener('change',function(){
	// 	alert('lol');
	// });


    
  </script>


@stop
