<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('reports')

<div class="jumbotron">
	<div class="container">
		<h3>Reportes<h3>
		
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
					<td>1</td>
					<td>Marcos Aguilar</td>
					<td>250</td>
					<td>Problema Recibo</td>
					<td>185678</td>
					<td>Incidente</td>
					<td>-</td>
					<td>06-08-2014</td>
					

				</tr>

				<tr>
					<td>2</td>
					<td>Juan Perez</td>
					<td>159</td>
					<td>Problema CPU</td>
					<td>185679</td>
					<td>Informes</td>
					<td>Extension</td>
					<td>06-08-2014</td>
					

				</tr>

				<tr>
					<td>3</td>
					<td>Pepe</td>
					<td>252</td>
					<td>Impresora</td>
					<td>185672</td>
					<td>Informes</td>
					<td>Extension</td>
					<td>06-08-2014</td>
					

				</tr>

			</table>
		</div>	
	</div>
	<div class="container container-azt">

		

		<form class="form-inline" role="form">
 			<div class="form-group">
   		 		<label class="sr-only"for="usuario">Usuario</label>
				<input type="text" class="form-control" id="usuario" placeholder="Usuario">
  			</div>
  			<div class="form-group">
   		 		<label class="sr-only"for="usuario">Tienda</label>
				<input type="text" class="form-control" id="usuario" placeholder="Tienda">
  			</div>
  			<div class="form-group">
   		 		<label class="sr-only"for="comentarios">Comentarios</label>
  				<textarea class="form-control" rows="1" placeholder="Comentarios"></textarea>
  			</div>
  			<div class="form-group">
   		 		<label class="sr-only"for="ticket">Ticket</label>
				<input type="text" class="form-control" id="ticket" placeholder="Ticket">
  			</div>
  			<select class="form-control">
			  <option>Tipo</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>

			<select class="form-control">
			  <option>Subtipo</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>

  			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="">
			    Saliente
			  </label>
			</div>

			<button type="button" class="btn btn-primary">Guardar</button>

 			 	
	   	</form>			



					
		
	</div>

</div>	
@stop