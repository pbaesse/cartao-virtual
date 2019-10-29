@extends('adminlte::page')
@section('title_prefix')
Dados
@stop
@section('adminlte_jv')
<script type="text/javascript">
  function mudar() {
    var divTu = document.getElementById("dd");
      divTu.style.display = "none";

    var cadastro = document.getElementById("dad");
      cadastro.style.display = "";

      var title = document.getElementById("h");
      title.style.display = "";

  }
  
</script>
 @stop
@section('content_header')
     <h3 id="h" style="display: none; text-align: center;">Informações do usuário</h3> 
@stop


@section('content')
<div class="card text-center" style="height: 500px;" id="dd">
  <div class="card-header">
    Cartão Virtual
  </div>
  <div class="card-body" style="padding-top: 150px;">
    <h3 class="card-title">Informe seus dados pessoais</h3>
    <p class="card-text">Para concluir seu cadastro, e poder usufruir dos nosso serviços, é preciso que informe os dados que irão aparecer na sua página.</p>
    <a href="#h" class="btn btn-primary" onclick=" mudar();" style="margin-top: 100px;">Continuar</a>
  </div>
</div>
<div class="dados" id="dad" style="display: none;">
 <form method="POST" action="{{ route('perfi.store') }}" enctype="multipart/form-data" style="width:500px;">
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
 
