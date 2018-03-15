<?php
if (isset($_GET['res'])) {
  echo"<div class='alert alert-danger' role='alert'>
  Debes llenafr todos los campos...
  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></div>";
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    <title>Formulario de php</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="page-header">
            <h1>Formulario Html y Php <small>Desarrollador</small></h1>
          </div>

          <form class="form-horizontal" method="post" action="procesar.php">
            <div class="form-group">
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="text" class="form-control" name="edad" placeholder="Edad">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="submit" name="submit" class="btn bnt-primary btn-block" value="enviar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    </body>
</html>
