
<?php
session_start();

if (isset($_POST['submit'])) {
  $username = "carlos";
  $password = "123abc";

  if ( (isset($_POST['user']) ) || (isset($_POST['password']) ) ) {
    $nombre = $_POST['user'];
    $pass = $_POST['password'];


    if (($nombre==$username) && ($pass==$password)) {
      //crear nuestra session

      $_SESSION['username'] = $nombre;
      //echo "usuario es ".$_SESSION['username'];
      header("location: user.php");

    }else {
      header("location: index.php");
    }

  }else {
    header("location: index.php");
  }

}else {
  header("location: index.php");

}


 ?>
