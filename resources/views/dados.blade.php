@extends('adminlte::page')

@section('title_prefix')
Dados Pessoais
@stop


@section('content_header')
    <h1 style="text-align: center;">Formulário</h1>
@stop

@section('content')
<div class="dados">
 <form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data" style="width:500px;">
    {!! csrf_field() !!}
    <input type="text" hidden name="user_id" value="{{$id_user}}">
  <div class="form-group" >
      <label >Nome completo</label>
      <input type="text" class="form-control" name="nome" id="validationDefault01" placeholder="Nome" >
    </div>
 <div class="form-group">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Data de Nascimento</label>
      <input type="date" class="form-control" name="data_nasc" id="date" placeholder="" >
    </div>
    
    
  </div>
  <div class="form-group">
    <label for="testeAreaDescr">Hobbies</label>
    <textarea class="form-control" id="description" name="hobbies" rows="3" placeholder="Informe seus hobbies aqui"></textarea>
  </div>
  <div class="form-group">
    <label for="testeAreaDescr">Descrição</label>
    <textarea class="form-control" id="description" name="descricao" rows="3" placeholder="Faça uma descrição sobre você"></textarea>
  </div>
   <div class="form-group" >
      <label >Imagem do Perfil</label>
      <input type="file" class="form-control" name="imagem">
    </div>

  <button class="btn btn-primary" type="submit">Concluir</button>
</div>
</form>
</div>
@stop