@extends('layout')
@section('showr')
<div class="jumbotron">
	<h1>Reporte Actualizado</h1>

	<div class="container">
		<table class="table">
			
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
				<td>{{$idreport->id}}</td>
				<td>{{$idreport->userName}}</td>
				<td>{{$idreport->store}}</td>
				<td>{{$idreport->comment}}</td>
				<td>{{$idreport->ticket}}</td>
				<td>{{$idreport->type}}</td>
				<td>{{$idreport->subtype}}</td>
				<td>{{$idreport->created_at}}</td>

		
			</tr>	
			

		</table>
	</div>


</div>


@stop
	