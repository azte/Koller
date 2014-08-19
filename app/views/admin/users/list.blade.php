@extends('layout')
@section('users')

<div class="jumbotron">
	<div class="container">
		<h1>Lista de usuarios</h1>
		<p>
	    	<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
  		</p>
  
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

{{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
{{ Form::close() }}
@stop