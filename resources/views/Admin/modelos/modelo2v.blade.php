<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modelo 2</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <style type="text/css">
  	.list-inline-item{
  		margin-bottom: 20px;
  	}
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">{{$nome}}</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/foto.jpg"alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experiências</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Educação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Habilidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Grupos</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">{{$nome}}
          <span class="text-primary">Stark</span>
        </h1>
        <div class="subheading mb-5">{{$cidade}}
          <a href="mailto:name@email.com">tonystark@avenger.com</a>
        </div>
        <p class="lead mb-5">{{$descr}}</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-autoprefixer"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">{{$dat}}</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Homem de ferro 1</h3>
            <div class="subheading mb-3">O Inicio de tudo</div>
            <p>{{$hob}}</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Vingadores- Era de Ultron</h3>
            <div class="subheading mb-3">A ameaça se aproxima</div>
            <p>Ao tentar proteger o planeta de ameaças, Tony Stark constrói um sistema de inteligência artificial que cuidaria da paz mundial. O projeto acaba dando errado e gera o nascimento do Ultron. Com o destino da Terra em jogo, Capitão América, Homem de Ferro, Thor, Hulk, Viúva Negra e Gavião Arqueiro terão que se unir para mais uma vez salvar a raça humana da extinção.Surgem primeiras visões do Semi-Deus THANOS.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">23 de abril de 2015</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Vingadores- Guerra Infinita</h3>
            <div class="subheading mb-3">A sua principal derrota</div>
            <p>Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas, Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade. Homem de ferro ver todos que ama VIRAREM PÓ NA SUA FRENTE.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">26 de abril de 2018</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Vingadores- End Game</h3>
            <div class="subheading mb-3">O ultimo sacrifício</div>
            <p>Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.Tony Stark reverte o estalo após uma batalha épica, se sacrificando para salva a todos.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">25 de abril de 2019 </span>
          </div>
        </div>

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">MIT - Massachusetts Institute of Technology</h3>
            <div class="subheading mb-3">Graduação em engenharia-mecânica</div>
            <div>Se formou com 15 anos</div>
            
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">29 de maio de 1985</span>
          </div>
        </div>

            </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Habilidades</h2>

        <div class="subheading mb-3">Principais Armaduras </div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <img src="img/1.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/2.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/3.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/4.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/5.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/6.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/7.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
            <img src="img/8.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
           <img src="img/9.jpg" height="270px" width="170px">
          </li>
          <li class="list-inline-item">
           <img src="img/10.jpg" height="270px" width="170px ">
          </li>
          
        </ul>

       
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    

   

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>




