<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('showQuerys')
<div class="jumbotron">
	<div class="container">
		<div class="container-azt">
			<div class="table-responsive">
			<table class="table table-striped">
				<h2>Resultados</h2>
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


				
				
			</table>
		</div>
	</div>

</div>
</div>
@stop