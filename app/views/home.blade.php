@extends('layout')


@section('content')

<?php
 
  $notices = Notice::all();

?>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Mesa de Ayuda</h1>
        <p>Contenido SLIDES, PROMOCIONES. Aqui se despliga el contenido dinámico</p>
        <p><a class="btn btn-primary btn-lg" role="button">Ver más &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
    @foreach($notices as $notice)

      <div class="row">
        <div class="col-md-4">
          <h2>{{$notice->title}}</h2>
          <p> {{$notice->content}} </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    @endforeach    
      <hr>

    </div> <!--Container--> 
@stop