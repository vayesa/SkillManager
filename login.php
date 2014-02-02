<?php
session_start();
  if(isset($_SESSION['id'])){
    header("location: escritorio.php"); 
  } else { 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico" />

    <title>Seguimiento Online &bull; Entrar</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilo.css" rel="stylesheet" />
    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="accion/login.php" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Introduzca sus datos de acceso.</h2>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus />
        <input type="pass" name="pass" id="pass" class="form-control" placeholder="Contraseña" required />
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br />
        <div class="alert alert-dismissable alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>¿No sabes como entrar?</strong> Si has llegado hasta aquí y no sabes que hacer, debes consultar a tu dietista/nutricionista o escribirnos a info@nutrimas.es
        </div>
      </form>
            
      </div> <!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
<?php } ?>