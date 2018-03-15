<?php
require 'config/config.php';

class Conexion extends Mysqli
{
  public function __construct()
  {
      parent::__construct(HOST,USER_NAME,PASS,DB_NAME);
      $this->set_charset('utf8');
      $this->connect_error ? die('error al conectar'):print '';

  }

}

//$db = new Conexion();

 ?>
