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

    <title>WPT || Colaboradores</title>

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
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php echo ALIMENTACIONITALIANA ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>C/ Tinerfe El Grande</span><br>
                <span>Adeje, S/C de Tenerife</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 736 068</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>nonnarina-importacion.italianas.l@hotmail.com</span><br>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--GMI -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/gmi.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>GMI</h3>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>mdavin@grandimolini.it</span><br>
              </div>
            </div>
          </div>
          <!-- //GMI -->
        </div>
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <?php echo ALIMENTACIONESPANOLA ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--M SOSA -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/msosa.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>MSOSA Distribuciones</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span></span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>674 488 957</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span></span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span></span>
              </div>
            </div>
          </div>
          <!-- //M SOSA -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php echo ASESORIA ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <?php echo ABOGADO ?>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <?php echo DISENOGRAFICO ?>
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/leongrafix.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>León Grafix</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Avda. San Lorenzo, 13</span><br>
                <span>Valle San Lorenzo, Arona</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 764 339 / 693 764 678</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>info@leongrafix.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.leongrafix.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <?php echo ELECTRICISTA ?>
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          <?php echo FONTANERO ?>
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--el guanche -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/elguanche.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>El Guanche</h3>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>666 990 109</span><br>
                <span>673 432 068</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <!-- //el guanche -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          <?php echo DESINFECTACION ?>
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Seranca -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/seranca.jpg" alt="seranca">
              <div class="caption colaborador">
                <h3>Servicios  Antiplagas de Canarias,  S.L.U.</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>C/ Fernando Beautell, 25. Pol. Ind. Costa Sur</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 22 00 00 / 699 445 445</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>publicidad@seranca.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span> <a href="www.seranca.com">www.seranca.com</a></span>
              </div>
            </div>
          </div>
          <!-- //Seranca -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          <?php echo INMOBILIARIA ?>
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php echo LIMPIEZA ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          <?php echo MAQUINARIAHOSTELERIA ?>
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/friogea.jpg" alt="friogea">
              <div class="caption colaborador">
                <h3>FrioGea</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Crta. General TF. 66 - nº 194 Buzanada a Valle S. Lorenzo</span><br>
                <span>38626 - Arona</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>922 721 965</span><br>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          <?php echo MENAJE ?>
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/afiladossur.jpg" alt="afilados sur">
              <div class="caption colaborador">
                <h3>Afilados Sur</h3>
                
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>629 320 154</span><br>
                
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
          <?php echo REFORMAS ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
          <!--NO PROBLEM -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/noproblem.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>No Problem</h3>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>Enzo:603 766 569</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>Angelo: 603 437 319</span><br>
              </div>
            </div>
          </div>
          <!-- //No Problem -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
          <?php echo REFRIGERACION ?>
        </a>
      </h4>
    </div>
    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
          <?php echo VESTUARIO ?>
        </a>
      </h4>
    </div>
    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Bordados Arona -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/bordadosarona.jpg" alt="bordados arona">
              <div class="caption colaborador">
                <h3>Bordados Arona</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>670 377 920</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>info@bordadospuntoarona.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.bordadospuntoarona.com/</span>
              </div>
            </div>
          </div>
          <!-- //bordados arona -->
          
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFiveteen" aria-expanded="false" aria-controls="collapseFiveteen">
          <?php echo TRANSPORTE ?>
        </a>
      </h4>
    </div>
    <div id="collapseFiveteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--4 landing -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Bulevar chajofe, 3. Edif. Eden, local 104, 1ª Planta</span><br>
                <span>Los Cristianos, Arona</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>638 854 356</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>info@4landing.es</span><br>
            </div>
          </div>
          <!-- //4 landing -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
          <?php echo PRODUCTOUSO ?>
        </a>
      </h4>
    </div>
    <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Polígono Industrial de Güimar, Manzana 12, nave B4</span><br>
                <span>Güimar</span>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>644 249 476 / 625 374 660</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span></span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.deunsolouso.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
          <?php echo ROTULACION ?>
        </a>
      </h4>
    </div>
    <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <!-- COLABORADORES
        ---------------------------------->
        <div class="row">
         <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/nonarina.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>Nonna Rina</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/4landing.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>4 Landing</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
          <!--Nonna Rina -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/colaboradores/deunsolouso.jpg" alt="nonna rina">
              <div class="caption colaborador">
                <h3>De Un Sólo Uso</h3>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span>Valle San Lorenzo</span><br>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <span>999 666 333</span><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span>dirección@dominio.com</span><br>
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <span>www.dirección.com</span>
              </div>
            </div>
          </div>
          <!-- //Nonna Rina -->
        </div>
      </div>
    </div>
  </div>
</div>
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