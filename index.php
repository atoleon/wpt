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


    <!-- SLIDER -->
    <ul class="rslides">
      <li><img src="img/home-slider/1.jpg" alt=""></li>
      <li><img src="img/home-slider/4.jpg" alt=""></li>
      <li><img src="img/home-slider/5.jpg" alt=""></li>
    </ul>
    <!-- /SLIDER -->

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
    <!-- Responsive Slider -->
    <script src="assets/responsiveslides.min.js"></script>
    <script>
      $(function() {
        $(".rslides").responsiveSlides();
      });
    </script>
  

</body>