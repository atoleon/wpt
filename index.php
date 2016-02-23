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

    <title>WORLD PIZZA TENERIFE</title>

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

    <!-- Custom styles for this template -->
    <link href="assets/carousel.css" rel="stylesheet">
    
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300|Lobster' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <!-- NAVBAR
    ================================================== -->
    <?php include ("assets/navigator.php"); ?>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" class="img-responsive" src="img/home-slider/1.jpg" alt="First slide">
          <div class="container">
           
          </div>
        </div>
        <div class="item active">
          <img class="second-slide" class="img-responsive" src="img/home-slider/4.jpg" alt="Second slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <img class="third-slide" class="img-responsive" src="img/home-slider/5.jpg" alt="Third slide">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/logo-wpt-big.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2><?php echo PIZZERO ?></h2>
          <h3><?php echo FAMILIA ?></h3>
          <p class="lead">
            <?php echo GRACIASPOR ?>
          </p>
        </div>
      </div>
      
      <hr class="featurette-divider">
      
      <!-- SERVICIOS -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-circle" src="img/servicio-soypizzeria.gif" alt="donde comer hoy world pizza tenerife" height="140" width="140">
          <h2><?php echo SOYPIZZERIA ?></h2>
          <p><?php echo LAMISMARES ?></p>
          <p><a class="btn btn-success" href="soy-pizzeria.php" role="button">Ver Detalles »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="img/servicio-soypizzero.jpg" alt="donde comer hoy world pizza tenerife" height="140" width="140">
          <h2><?php echo SOYPIZZERO ?></h2>
          <p><?php echo ESTEOFICIORES ?></p>
          <p><a class="btn btn-success" href="soy-pizzero.php" role="button">Ver Detalles »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <a href="#"><img class="img-circle" src="img/servicio-cursos" alt="Cursos" height="140" width="140"></a>
            <h2><?php echo CURSOS ?></h2>
            <p><?php echo CURSOBASERES ?></p>
          <p><a class="btn btn-success" href="cursos.php" role="button">Ver Detalles »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="img/servicio-dondecomer.jpg" alt="donde comer hoy world pizza tenerife" height="140" width="140">
          <h2><?php echo DONDECOMER ?></h2>
          <p>Te ofrecemos un listado de restaurantes certificados por la asociación para que puedas encontran un lugar donde disfrutar de una comida de calidad...</p>
          <p><a class="btn btn-success" href="donde-comer.php" role="button">Ver Detalles »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2><?php echo PASION ?></h2>
          <h3><?php echo FUERZA ?></h3>
          <p class="lead">
            <?php echo NOMIRAMOS ?>
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/wpt-tenerife-blanco.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#"><?php echo VOLVERARRIBA ?></a></p>
        <p>© 2015 World Pizza Tenerife · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>