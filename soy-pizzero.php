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

    <title>WPT | <?php echo SOYPIZZERO ?></title>

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
            <div class="col-md-7">
                <p class="subtitulo">
                   <?php echo SOYPIZZERO ?>
               </p>
                <p class="texto-base">
                    <?php echo ESTEOFICIO ?>              
                </p>
            </div>
            <div class="col-md-5">
               <p class="subtitulo">
                   <?php echo FORMALTAPIZZERO ?>
               </p>
                <form id="ajax-contact" method="post" action="assets/mail-alta-pizzero.php">
                  <div class="form-group">
                    <label for="name"><?php echo NOMBRE ?></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="surname"><?php echo APELLIDO ?></label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Apellido">
                  </div>
                  <div class="form-group">
                    <label for="dni"><?php echo "DNI" ?></label>
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
                  </div>
                  <div class="form-group">
                    <label for="address"><?php echo "Dirección" ?></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Dirección">
                  </div>
                  <div class="form-group">
                    <label for="birthdate"><?php echo "Fecha de nacimiento dd/mm/aaaa" ?></label>
                    <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Fecha de nacimiento">
                  </div>
                  <div class="form-group">
                    <label for="nacionality"><?php echo "Nacionalidad" ?></label>
                    <input type="text" class="form-control" id="nacionality" name="nacionality" placeholder="Nacionalidad">
                  </div>
                  <div class="form-group">
                    <label for="civilstatus"><?php echo "Estado civil" ?></label>
                    <input type="text" class="form-control" id="civilstatus" name="civilstatus" placeholder="Estado civil">
                  </div>
                  <div class="form-group">
                    <label for="phone"><?php echo "Teléfono" ?></label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono">
                  </div>
                  <div class="form-group">
                    <label for="mobile"><?php echo "Teléfono móvil" ?></label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Teléfono móvil">
                  </div>
                  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                  </div>
                  <button type="submit" class="btn btn-danger"><?php echo HAZTESOCIO ?></button>
                </form>
                <div id="form-messages"></div>
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

    <script src="jquery-2.1.0.min.js"></script>
    <script src="assets/app.js"></script>

</body>