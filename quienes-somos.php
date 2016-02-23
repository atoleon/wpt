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

    <title>WPT || <?php echo QUIENESSOMOS ?></title>

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
                <img class="img-responsive" src="img/cabecera3.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="img/logo-wpt-simple-big.jpg" alt="">
            </div>
            <div class="col-md-8">
                <p class="subtitulo">
                   <?php echo FUNDADOR ?>
               </p>
                <p class="texto-base">
                  <?php echo ELFUNDADOR ?>
                </p>
            </div>
        </div>
        
        <hr class="featurette-divider">
        
          <div class="row">
           <div class="col-md-12">
               <p class="subtitulo">
                   <?php echo PROYECTO ?>
               </p>
           </div>
       </div>
        <div class="row">
            <div class="col-md-4">
              <img src="img/wpt-tenerife-espacio.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-8">
                <p class="texto-base">
                  <?php echo ENELMUNDO ?>
                </p>
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
  

</body>