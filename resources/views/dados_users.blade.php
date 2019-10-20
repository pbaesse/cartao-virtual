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
  <link href="lib/animate/animate.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/dados.css" rel="stylesheet">

</head>
<body>
 
	<div class="dados" >
	<form method="POST" action="{{ route('form.store') }}" class="needs-validation" novalidate>
    {!! csrf_field() !!}
    <h1></h1>
    
    <input type="text" hidden name="user_id" value="{{$id_user}}">

  <div class="form-group">
  
      <label for="validationCustom03">Nome Completo</label>
      <input type="text" class="form-control" name="nome" id="validationCustom03" placeholder="Nome" required>
      <div class="invalid-feedback">
        Campo Obrigatorio!
      </div>
    </div>
 <div class="form-group">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="validationCustom03" placeholder="Cidade" required>
      <div class="invalid-feedback">
        Campo Obrigatorio!
      </div>
    </div>
    <div class="col-md-6 mb-3">
<<<<<<< HEAD
      <label for="validationCustom04">Data de nascimento</label>
     <input type="date" class="form-control" name="data_nasc" id="validationCustom04" id="date" placeholder="" required>
      <div class="invalid-feedback">
        Campo Obrigatorio!
      </div>
=======
      <label for="validationDefault03">Data de Nascimento</label>
      <input type="date" class="form-control" name="data_nasc" id="date" placeholder="" >
>>>>>>> 75cb274a6929951a0efe3a67b95eda02def55021
    </div>
    
    
  </div>
  <div class="form-group">
    <label for="validationCustom05">Hoobies</label>
    <textarea class="form-control" id="description" id="validationCustom05" name="hobbies" rows="3" placeholder="Informe seus hobbies aqui" required ></textarea>
     <div class="invalid-feedback">
        Campo Obrigatorio!
      </div>
  </div>
  <div class="form-group">
    <label for="testeAreaDescr">Descrição</label>
    <textarea class="form-control" id="description" name="descricao" rows="3" placeholder="Faça uma descrição sobre você" required></textarea>
    <div class="invalid-feedback">
        Campo Obrigatorio!
      </div>
  </div>
  <button class="btn btn-primary" type="submit">Concluir</button>
</div>
</form>
	</div>
  <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>