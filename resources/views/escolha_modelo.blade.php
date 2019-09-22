<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <title>Cartão Virtual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #4d4d4d;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                width: 410px;
                height: 120px;
                
            }

            .position-ref {
                position: relative;
            }

            .center {
                position: absolute;
                right: 10px;
                top: 10px;
                width: 700px;
                height: 64px;
                letter-spacing: 50px;
                left: 80px;
                 }

            .content {
                text-align: center;
                position:absolute;
                top: 220px;
                left: 290px;
                height: 199px;
                width: 883px;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #99b3ff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                

            }

            .m-b-md {
                margin-bottom: 30px;
                position:absolute;
                bottom: 200px;
                left: 130px;
            }
            .logo_home{
              position: absolute;
              top: 0px;
              left:0px;
              width: 300px;
              height: 10px;
              color:#a65959;
              background-color: white;
              
               }
            .home_cabecalho{
                position: absolute;
                top:0px;
                left: 300px;
                background-color:white;
                color:#4d4d4d;
                width:700px;
                height: 101px;
                margin: 0 auto;
                text-align: center;
               }
               .modelo1{
               	width:360px;
                height: 250px;
               }
               .btn-primary{
               	margin-top: 20px;

               }
        </style>
    </head>
    <body>
       
             <div class="logo_home">
              <h2> Logo </h2> 
            <header class="home_cabecalho">
          <h1>Cartão virtual<h1>
            </header>
            </div>

            <div class="content">
                <div class="title m-b-md">
                   Escolha seu modelo inicial: 
                </div>
                
                <div class="modelo1">
                	<img src="http://portal.ifrn.edu.br/campus/natalcentral/eventos/seminario-psiep/logomarca/image_preview" width="350" height="230">
                	<a href="{{ url('/modeloteste') }}"><button  type="button" class="btn btn-primary" >modelo 1</button></a>
                </div>

                
                </div>
            </div>
        </div>
    </body>
</html>
