<?php

!isset($_POST)? die('Acceso Denegado'):'';

require 'conexion.class.php';

$db = new Conexion();
if (isset($_POST['alta'])) {
  //consulta el id mayor e incrementa en 1
  $qry = "SELECT (IFNULL(MAX(cli_id),0)+1)cli_id FROM cliente";
  $resp = $db->query($qry);
  $row = mysqli_fetch_array($resp);
  $Id_cli = $row['cli_id'];


  $nombre = $_POST['nombre'];
  $domicilio = $_POST['domicilio'];

  //inserta registro
  $query = "INSERT INTO `cliente`(`cli_id`, `cli_nom`, `cli_dom`, `fecha_alta`) VALUES($Id_cli, '$nombre','$domicilio', '".date('Y/m/d')."')";

  $result = $db->query($query);

  //Valida registro halla sido correcto
  if ($db->affected_rows<0) {
    header("location: cliente.php?error=Hubo un problema");
  }else {
    header("location: cliente.php");
  }

}

//Modifica Registr Cliente
  if (isset($_POST['editar'])) {
    var_dump($_POST);
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $domicilio = $_POST['domicilio'];

    $query = "UPDATE `cliente`
      SET `cli_nom` = '$nombre',
          `cli_dom` = '$domicilio'
      WHERE
        `cli_id` = $id";

    $result = $db->query($query);
    if ($db->affected_rows<0) {
      header("location: cliente.php?error=Hubo un problema");
    }else {
      header("location: cliente.php");
    }

  }

  if (isset($_POST['pedido'])) {
//    var_dump($_POST);

    $cliente =$_POST['cliente'];
    $producto =$_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $d=rand(5,10);
    $importe = $cantidad * $precio;
    settype($cliente, 'integer');
    $query = "INSERT INTO `pedido` (`cli_id`, `producto`, `importe`, `precio`, `cantidad`)
              VALUES ($cliente, '$producto', $importe, $precio, $cantidad)";

    $result = $db->query($query);
    if ($db->affected_rows<0) {
      header("location: index.php?error=Hubo un problema");
    }else {
      header("location: index.php");
    }

  }

 ?>
