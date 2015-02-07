

@extends('layout')
@section('showQuerys')
<div class="jumbotron">
	<div class="container">
		<div class="container-azt">
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
						<td>{{$report->type}}</td>
						<td>{{$report->subtype}}</td>
						<td>{{$report->created_at}}</td>

					</tr>
					



					@endforeach


				</tr>
				
			</table>
		</div>
	</div>


</div>
@stop