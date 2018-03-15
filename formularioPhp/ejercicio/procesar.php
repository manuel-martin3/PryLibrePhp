<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Obtencion de Datos</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Formulario Html y Php <small>Obtencion de Datos</small></h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <?php
            if (isset($_POST['submit'])) {
              //var_dump($_POST);
              if (strlen($_POST['nombre'])>0) {
                echo "<div class='alert alert-success' role='alert'>El nombre ingresado es : $_POST[nombre]
                <span class='glyphicon glyphicon-ok' aria-hidden='true'></span></div>";
              }else {
                header('location: index.php?res=vacio');
              }

              if (strlen($_POST['email'])>0) {
                if (strpos($_POST['email'],"@")) {
                  echo "<div class='alert alert-success' role='alert'>El correo $_POST[email] es válido
                  <span class='glyphicon glyphicon-ok' aria-hidden='true'></span></div>";
                }else {
                  echo "<div class='alert alert-danger' role='alert'>El correo ingresado es inválido..
                  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></div>";
                }
              }else {
                header('location: index.php?res=vacio');
              }

              if (strlen($_POST['edad'])>0) {
                if (is_numeric($_POST['edad'])) {
                  echo "<div class='alert alert-success' role='alert'>La edad ingresado es : $_POST[edad] años
                  <span class='glyphicon glyphicon-ok' aria-hidden='true'></span></div>";
                }else {
                  echo "<div class='alert alert-danger' role='alert'>La edad ingresada no es válida
                  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></div>";
                }
              }else {
                header('location: index.php?res=vacio');
              }

            }else {
              header('location: index.php');
            }
           ?>
        </div>
      </div>
    </div>

  </body>
</html>
