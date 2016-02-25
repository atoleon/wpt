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

    <title>WPT || <?php echo DONDECOMER ?></title>

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
<!-- NAVBAR
================================================== -->
  <body>
    <?php include ("assets/navigator.php"); ?>
    
    <div class="container cabecera">
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="img/cabecera1.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        <!-- SELLO GARANTÍA -->
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <img src="img/sello-wpt.jpg" alt="sello garantía world pizza tenerife">
          </div>
          <div class="col-sm-8 col-md-9">
            <h2 style="color: red"><?php echo SELLOTITULO ?></h2>
            <h3><?php echo SELLOTEXTO ?></h3>
          </div>
        </div>
        <!-- /SELLO GARANTÍA --> 

        <hr class="featurette-divider">

        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Limperatore -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/pizzerias/limperatore/portada.jpg" alt="Limperatore">
              <div class="caption colaborador">
                <h3>L'imperatore</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Crta General tf -28 nº141, Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 76 73 24 </span><br>
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                <span>Lunes a Domingo 19h – 23:30h</span><br>
                <span>Martes cerrado</span><br>
              </div>
            </div>
          </div>
          <!-- //Limperatore -->
          <!--Wairua -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/pizzerias/wairua/portada.jpg" alt="Wairua">
              <div class="caption colaborador">
                <h3>Pizzería Wairua</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Calle San Francisco, El Médano</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 179 580</span><br>
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                <span>Miercoles a Viernes de 19h – 23:30h</span><br>
                <span>Sábado y Domingo de 13h a 15:30 y 19h – 23:30h</span><br>
                <span>Lunes y Martes cerrado</span><br>
              </div>
            </div>
          </div>
          <!-- //Wairua -->
          <!--Thats Amore -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/pizzerias/thatsamore/portada.jpg" alt="Thats Amore">
              <div class="caption colaborador">
                <h3>That's Amore</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Calle Villa de la Orotava, 3. El Médano</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>630 23 91 02</span><br>
              </div>
            </div>
          </div>
          <!-- //Thats Amore -->
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
  

</body>