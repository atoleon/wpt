<?php

session_start ();

if (isset($_GET["idioma"])) {
  $_SESSION["idioma"] = $_GET["idioma"];
}
elseif (!$_SESSION["idioma"]) {
  $_SESSION["idioma"] = "es";
}
include ("lang/". $_SESSION["idioma"] .".php");

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WPT | <?php echo CURSOS ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="assets/slider.css">

    <!-- Custom styles for this template -->
    <link href="assets/carousel.css" rel="stylesheet">
    
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300|Lobster' rel='stylesheet' type='text/css'>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php include ("assets/navigator.php"); ?>

    
    <div class="container cabecera">
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="img/cabecera3.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/header_curso.jpg" class="img-responsive" alt="world pizza tenerife - cursos">
            </div>
        </div>
        
        <hr class="featurette-divider">
        
        <div class="row">
            <div class="col-md-6">
                <p class="subtitulo">
                   <?php echo ESCUELAPIZZERO ?>
               </p>
                <p class="texto-base">
                    <?php echo CURSOBASE ?>
                </p>
                <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#skills" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo HABILIDADES ?>
                </button>
                <br>
                <div class="collapse" id="skills">
                  <div class="well">
                    <?php echo SABERPREPARAR ?>
                  </div>
                </div>
                <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#knowledge" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo CONOCIMIENTO ?>
                </button>
                <br>
                <div class="collapse" id="knowledge">
                  <div class="well">
                    <?php echo ADQUIRIR ?>
                  </div>
                </div>
                <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#competences" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo COMPETENCIA ?>
                </button>  
                <br>          
                <div class="collapse" id="competences">
                  <div class="well">
                    <?php echo SABERRECONOCER ?>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <br><br>
                <div class="flex-container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="img/curso-photos/slide1.jpg" /></a>
                            </li>
                            
                            <li>
                                <img src="img/curso-photos/slide2.jpg" /></a>
                            </li>
                            
                            <li>
                                <img src="img/curso-photos/slide3.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide3.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide4.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide5.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide6.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide7.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide8.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide9.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide10.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide11.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide12.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide13.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide14.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide15.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide16.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide17.jpg" /></a>
                            </li>
                            <li>
                                <img src="img/curso-photos/slide18.jpg" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-6">
                <p class="subtitulo">
                   <?php echo CURSOESPECIALIZACION ?>
               </p>
                <p class="texto-base">
                    <?php echo CETEXTO ?>
                </p>
            </div>
            <div class="col-md-3">
                <img src="img/cursopizza1.jpg" alt="Curso Pizza " class="img-thumbnail">
                
            </div>
            <div class="col-md-3">
                <img src="img/cursopizza2.jpg" alt="Curso Pizza " class="img-thumbnail">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-6">
                <p class="subtitulo">
                   <?php echo CURSOBANDEJA ?>
               </p>
                <p class="texto-base">
                    <?php echo CBTEXTO ?>
                </p>
            </div>
            <div class="col-md-3">
                <img src="img/cursobandeja1.jpg" alt="Curso Bandeja " class="img-thumbnail">
            </div>
            <div class="col-md-3">
                <img src="img/cursobandeja2.jpg" alt="Curso Bandeja " class="img-thumbnail">
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Responsive slider -->
    <script src="assets/jquery.flexslider-min.js"></script>
    <script>
        $(document).ready(function () {
            $('.flexslider').flexslider({
                animation: 'fade',
                controlsContainer: '.flexslider'
            });
        });
    </script>

</body>