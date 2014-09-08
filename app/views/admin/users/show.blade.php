@extends('layout')
@section('showUsers')

<div class="jumbotron">
	<h1>Usuario creado</h1>

	<div class="container">
		<table class="table">
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Usuario</th>
				<th>Tipo</th>
			</tr>

			
			<tr>
				<td>{{$iduser->id}}</td>
				<td>{{$iduser->username}}</td>
				<td>{{$iduser->name}}</td>
				<td>{{$iduser->type}}</td>
				

			</tr>	
			

		</table>
	</div>
</div>

@stop