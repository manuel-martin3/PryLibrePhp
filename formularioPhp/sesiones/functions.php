<?php

function verificar_sesion(){
  if (!isset($_SESSION['username'])) {
    unset($_SESSION);
    header("location: index.php");
  }

}


 ?>
