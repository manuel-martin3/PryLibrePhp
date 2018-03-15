<?php
if (isset($_GET['par'])) {
  if (file_exists("img/$_GET[par]")) {
    unlink("img/$_GET[par]");
  }
}

if (isset($_GET['parx'])) {
  if (file_exists("pdf/$_GET[parx]")) {
    unlink("pdf/$_GET[parx]");
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galeria php</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Galeria de Imagenes <small>Desarrollo</small></h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form enctype="multipart/form-data" action="upload.php" method="post">
        <p>Elige un archivo
          <input type="file" name="user-file" >
        </p>
        <div class="helper-text">Elige una imagen jpg y maximo 600kb</div>
            <?php isset($_GET['error']) ?
              print "<div class='alert alert-danger' role='alert'>"
                  .$_GET['error']."<span class='glyphicon glyphicon-remove' aria-hidden='true'></span></div>"
              :print '';
            ?>
        <button type="submit" class="btn btn-primary btn-block" name="button">Upload</button>
      </form>
    </div>
  </div>
      <hr>
      <h3>Imagenes Subidas</h3>
      <div class="col-md-12">
        <?php
        $imgs = dir('img');
        while (($img = $imgs->read()) !== false) {
          if (preg_match('/jpg/', $img) ||
              preg_match('/png/', $img)
            ) {
            echo "<a href='index.php?par=$img'><img src='img/$img' class='img-thumbnail'></a>";
          }
        }
         ?>
      </div>
    <hr>
    <h3>Documetos en PDF</h3>
      <div class="col-md-12">
        <?php
        $pdfs = dir('pdf');
        while (($pdf = $pdfs->read()) !== false) {
          if (preg_match('/pdf/', $pdf)) {
            if (substr($pdf,-3)=="pdf") {
              echo "<a href='index.php?parx=$pdf'><img src='pdf/docpdf.png' class='img-thumbnail'></a>";
            }
          }
        }
         ?>
      </div>
    </div>
  </body>
</html>
