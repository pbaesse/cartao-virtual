@extends('adminlte::page')
<style type="text/css">
	.content-wrapper{
		height: 800px;
	}
	
	.btn-primary{
		object-position: center;

	}
    .modelo1{
		position: absolute;
		left: 280px;
		bottom: 380px;
		width: 255px;
		height: 330px;
		
    }
    
    .modelo2{
		position: absolute;
		left: 630px;
		bottom: 380px;
		width: 255px;
		height: 330px;
		
    }
    
    .modelo3{
		position: absolute;
		left: 980px;
		bottom: 380px;
		width: 255px;
		height: 330px;
		
    }
   
    .modelo4{
		position: absolute;
		left: 280px;
		top: 500px;
		width: 255px;
		height: 330px;
		
    }
    .modelo5{
		position: absolute;
		left: 280px;
		top: 500px;
		width: 255px;
		height: 330px;
		
    }

</style>
@section('title_prefix')
Gerenciador de temas
@stop
@section('content_header')
<h1>Selecione seu tema: </h1>
@stop
@section('content')
    
    <div class="modelo1">
    	<img src="{{ url('imagens/tdmundo.jpg') }}" width="200px" height="200px"><a href="{{ url('/modelo1') }}"><button  type="button" class="btn btn-primary" >Tema 1</button></a>    
     </div>
         <div class="modelo2">
    	<img src="{{ url('imagens/tdmundo.jpg') }}" width="200px" height="200px"><a href="{{ url('/modelo2') }}"><button  type="button" class="btn btn-primary" >Tema 2</button></a>    
     </div>
      
      <div class="modelo3">
    	<img src="{{ url('imagens/tdmundo.jpg') }}" width="200px" height="200px"><a href="{{ url('/modelo3') }}"><button  type="button" class="btn btn-primary" >Tema 3</button></a>    
     </div>
      <div class="modelo2">
    	<img src="{{ url('imagens/tdmundo.jpg') }}" width="200px" height="200px"><a href="{{ url('/modelo4') }}"><button  type="button" class="btn btn-primary" >Tema 4</button></a>    
     </div>
     <<div class="modelo5">
    	<img src="{{ url('imagens/tdmundo.jpg') }}" width="200px" height="200px"><a href="{{ url('/modelo5') }}"><button  type="button" class="btn btn-primary" >Tema 5</button></a>    
     </div>
@stop

