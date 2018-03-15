<?php

function validar($file){

    if ($file['user-file']['type'] !== 'image/jpeg' &&
        $file['user-file']['type'] !== 'image/png' &&
        $file['user-file']['type'] !== 'application/pdf')
      {
        return false;
      }

    if ($file['user-file']['size'] > 600000) {

      return false;
    }

    return true;
}

if (validar($_FILES)) {
  //var_dump($_FILES);

  if (substr($_FILES['user-file']['name'],-3) === 'pdf') {
    $path = 'pdf/';

  }else {
    $path = 'img/';
  }

  $file = $path.basename($_FILES['user-file']['name']);

  if (move_uploaded_file($_FILES['user-file']['tmp_name'], $file)) {
    header('location: index.php');
  }

}else {
  //var_dump($_FILES);
  //echo "Error";
  header('location: index.php?error=no cumple con las condiciones');
}

 ?>
