<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('showNews')
<div class="jumbotron">
	<div class="container">
		<h2>AVISOS</h2>
		<p>
			<a href="{{ route('admin.notices.create') }}" class="btn btn-primary">Crear Aviso</a>
	  	</p>
	  
		<table class="table table-striped">
		    
		    <tr>
		    	<th>ID</th>
				<th>Titulo</th>
				<th>Contenido</th>
				<th>Fecha</th>
				<th>Tool</th>

			</tr>
		@foreach($notices as $notice)
			<tr>
				<td>{{$notice->id}}</td>
				<td>{{$notice->title}}</td>
				<td>{{$notice->content}}</td>
				<td>{{$notice->updated_at}}</td>
				<td>
					<a href="{{ route('admin.notices.edit', $notice->id) }}" class="btn btn-info">
		              Editar
					</a>
	          	</td>
				




			</tr>

		@endforeach

		</table>
	</div>
</div>

@stop

