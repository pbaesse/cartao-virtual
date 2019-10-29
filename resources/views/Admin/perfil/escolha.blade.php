@extends('adminlte::page')

@section('title_prefix')

@section('content_header')
    <h1>Modelos</h1>
@stop

@section('content')
    <div class="modelo1">
                  <img src="imagens/ifm1.jpg" width="350" height="230">
                  <a href="{{ url('/modelo1') }}"><button  type="button" class="btn btn-primary" >modelo 1</button></a>
              </div>
              <div class="modelo2">
                    <img src="imagens/ifm2.jpg" width="350" height="230">
                    <a href="{{ url('/modelo2') }}"><button  type="button" class="btn btn-primary" >modelo 2</button></a>
     </div>
@stop