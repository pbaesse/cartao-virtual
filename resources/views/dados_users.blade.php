<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dados pessoais</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b2020eb906.js" crossorigin="anonymous"></script>
  <!-- Libraries CSS Files -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/dados.css" rel="stylesheet">

</head>
<body>
 
	<div class="dados" >
	<form method="POST" action="{{ route('form.store') }}">
    {!! csrf_field() !!}
    <h1></h1>
    
    <input type="text" hidden name="user_id" value="{{$id_user}}">

  <div class="form-group">
      <label >Nome completo</label>
      <input type="text" class="form-control" name="nome" id="validationDefault01" placeholder="Nome" >
    </div>
 <div class="form-group">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" >
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Data de Nacimento</label>
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
  <button class="btn btn-primary" type="submit">Concluir</button>
</div>
</form>
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>