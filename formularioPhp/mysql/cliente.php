
<?php require 'conexion.class.php'; ?>
<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  !is_numeric($id)? die("El Id no es numerico.:::. Cosultar..!"): '';

  $query = "DELETE FROM `cliente` WHERE cli_id=$id ";
  $db = new Conexion();
  $result = $db->query($query);

  if ($db->affected_rows<0) {
    header("location: cliente.php?error=Hubo un problema");
  }else {
    header("location: cliente.php");
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body

    <form class="" action="crud.php" method="post">
      <h1>Cliente</h1>
      <?php
/*
      if (isset($_GET['error'])) {
        echo ($_GET['error']);
      }
*/
       ?>
        <p>Nombre <input type="text" name="nombre" ></p>
        <p>Domicilio <input type="text" name="domicilio" ></p>
        <input type="submit" name="alta" value="Guardar">
    </form>
    <table border="1">
      <tr>
        <th>Nombre</th>
        <th>Domicilio</th>
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminnar</th>
      </tr>
      <?php
        $db = new Conexion();
        $query = "SELECT DISTINCT cli_id, cli_nom, cli_dom, fecha_alta FROM cliente";

        if ($res = $db->query($query)) {

            $table = '';
            while ( $row = mysqli_fetch_array($res) ) {
            $table .= "<tr>";
            $table .= "<td> $row[cli_nom] </td>";
            $table .= "<td> $row[cli_dom] </td>";
            $table .= "<td> $row[fecha_alta] </td>";
            $table .= "<td><a href=\"editar.php?id=$row[cli_id] \">Editar</a></td>";
            $table .= "<td><a href=\"cliente.php?id=$row[cli_id] \">Eliminar</a></td>";
            $table .= "</tr>";

          }
          echo $table;

          /* liberar el conjunto de resultados */

        }else {
          printf("La selección devolvió %d filas.\n", $res->num_rows);
        }

        $res->close();

       ?>
    </table>

  </body>
</html>
