<?php require 'conexion.class.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
      <h1>Index</h1>
      <a href="cliente.php">Ver Clientes</a>

      <h2>Registrar Pedido</h2>
      <?php
      $db = new Conexion();
      $query = "SELECT DISTINCT cli_id, cli_nom FROM cliente";
      $res = $db->query($query);
      $option ="";
      while ($row = mysqli_fetch_array($res)) {
        $option .= "<option value=\"$row[cli_id]\">$row[cli_nom]</option>";
      }
       ?>
       <form class="" action="crud.php" method="post">
         <p>Cliente
           <select class="" name="cliente">
             <option value="-">Selecciona Cliente</option>
             <?php
              echo $option;
              ?>
           </select>
         </p>
         <p>Producto<input type="text" name="producto"></p>
         <p>Cantidad<input type="text" name="cantidad"></p>
         <input type="submit" name="pedido" >
       </form>
       <?php

        $query = "select * from pedido p inner join cliente c on p.cli_id = c.cli_id";
        $res = $db->query($query);
        $table = '';
        while ($row = mysqli_fetch_array($res)) {
          $table .= "<tr>";
          $table .= "<td>$row[cli_nom]</td>";
          $table .= "<td>$row[cli_dom]</td>";
          $table .= "<td>$row[producto]</td>";
          $table .= "<td>$row[precio]</td>";
          $table .= "<td>$row[cantidad]</td>";
          $table .= "<td>$row[importe]</td>";

          $table .= "</tr>";
        }


        ?>

       <h2>Informe de Pedido</h2>
       <table style="text-align: center; border:1px solid #000;">
        <tr>
          <th>Cliente</th>
          <th>Dommicilio</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Importe</th>

        </tr>
        <tr>
          <?php
            echo $table;
           ?>
        </tr>
       </table>

  </body>
</html>
