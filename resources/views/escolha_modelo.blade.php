    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Modelos</title>
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

  <style type="text/css">
      .modelo1{
        position: absolute;
       left: 200px;
       bottom: 160px;

      }
      .modelo_es{
        position: absolute;
        color:#2dc997;
        top: 130px;
        font-size: 38px;
      }
      .modelo2{
        position: absolute;
       right: 200px;
       bottom: 160px;

      }

      .btn-primary{
        position: relative;
       top: 150px;
       right: 250px;
      }
      .fa-cog{
         color:#bfbfbf;
      }
      .fa-power-off{
        color: #cc0000;
      }

        
     
  
  </style>

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
          <li>
          <i class="fa fa-cog" aria-hidden="true">
           
           <a href="{{ url('/home') }}">Configurações</a>
          </i>
          </li>
            
          <li>
            <i class="fa fa-fw fa-power-off">
                <a href="{{ url('/') }}">Sair</a>
            </i>
        </li>
          
          
        
        </ul>

  
          
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
        <content class="modelo_es">
            Escolha seu modelo inicial: 
        </content>
       
                 
               <div class="modelo1">
                  <img src="imagens/ifm1.jpg" width="350" height="230">
                  <a href="{{ url('/modelo1') }}"><button  type="button" class="btn btn-primary" >modelo 1</button></a>
              </div>
              <div class="modelo2">
                    <img src="imagens/ifm2.jpg" width="350" height="230">
                    <a href="{{ url('/modelo2') }}"><button  type="button" class="btn btn-primary" >modelo 2</button></a>
                </div>

    </div>
  </section>
  <script type="lib/bootstrap/js/bootstrap.min.js"></script> 
  <script type="lib/bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>