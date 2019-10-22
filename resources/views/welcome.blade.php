<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Cartão Virtual</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h1>Logo</h1></a>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="https://github.com/pbaesse/cartao-virtual">GitHub</a></li>'
                    '
          <li><a href="{{ route('login') }}">Login</a></li>
        
        </ul>

  
          
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Cartão Virtual</h1>
      <h2>Crie agora sua página com suas informações</h2>
      <a href="{{ route('register') }}" class="btn-get-started">Cadastre-se</a>

    </div>
  </section>
  <script type="lib/bootstrap/js/bootstrap.min.js"></script> 
  <script type="lib/bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>