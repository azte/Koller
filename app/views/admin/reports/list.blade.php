@extends('layout')
@section('showReports')
	<div class="jumbotron">
		<div class="container">


			<table class="table table-striped">
	    
	    <tr>
	    	<th>ID</th>
	        <th>Full name</th>
	        <th>Type</th>
	        <th>Acciones</th>
	    </tr>

	    @foreach($users as $user)

	    <tr>
	    	<td>{{$user->id}}</td>
	        <td>{{$user->name}}</td>
	        <td>{{$user->type}}</td>
	        <td>
	          <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info">
	              Ver
	          </a>
	          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
	            Editar
	          </a>
	          <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete">
              Eliminar
          	  </a>
	        </td>
	    </tr>
	    @endforeach
	    
	  </table>
		</div>

	</div>

@stop