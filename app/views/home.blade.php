<link href="{{ asset('style.css')}}" rel="stylesheet">


@extends('layout')
@section('content')

<?php
  

  $notices = Notice::orderBy('id','DESC')->paginate(3);

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

   
        <div class="col-md-4">
          <h2>{{$notice->title}}</h2>
          <p>{{$notice->content}}</p>
          <p>{{$notice->created_at}}</p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalles &raquo;</a></p>
        </div>
  

   
    @endforeach 
     
     </div> <!--Container-->  
    <div class="container">{{$notices->links() }}</div>
  
@stop