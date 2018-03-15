<?php
require 'conexion.class.php';
if (isset($_GET['id'])) {
  $db = new Conexion();
  $id = $_GET['id'];
  if (!is_numeric($id)) {
    die("El Id no es numerico.:::. Cosultar..!");  
  }

  $query = "SELECT DISTINCT cli_id, cli_nom, cli_dom, fecha_alta FROM cliente
  WHERE cli_id = $id ";

  $res = $db->query($query);
  $datos = mysqli_fetch_array($res);
  //var_dump($datos);

}else {
  header("location: index.php");
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Editar Cliente</title>
   </head>
   <body>
     <h2>Editar Cliente</h2>
     <form class="" action="crud.php" method="post">

      <p>Nombre <input type="text" name="nombre" value="<?php echo $datos['cli_nom'] ?>"></p>
      <p>Domicilio <input type="text" name="domicilio" value="<?php echo $datos['cli_dom'] ?>"></p>
      <input type="hidden" name="id" value="<?php echo $datos['cli_id'] ?>">
      <input type="submit" name="editar" value="Guardar">
     </form>
   </body>
 </html>
