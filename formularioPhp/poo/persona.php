<?php
/**
 *
 */
/**
 *
 */
interface identificaSexo
{
  public function sexo();
}


abstract class Persona
{
  public $nombre;
  public $direccion;
  Public $fecnac;
  public $edad;
  public $sexo;

  public function __construct($nombre, $direccion){
    $this->setNombre($nombre);
    $this->setDireccion($direccion);

    echo "La persona se llama: ".$this->getNombre()."</br>".
    " y vive en : ".$this->getDireccion(). "</br>";

    $this->sexo($this->sexo = "M");
  }

  public function setNombre($nombre){
    $this->_nombre = $nombre;
  }

  public function getNombre(){
    return $this->_nombre;
  }

  public function setDireccion($direccion){
    $this->_direccion = $direccion;
  }

  public function getDireccion(){
    return $this->_direccion;
  }

  public function fecnac($fecnac){
    if (strtotime($fecnac)>=strtotime(date("d/m/Y"))) {
      echo "fecha no valida </br>";
      return false;
    }else {
      echo " y su fecha de nacimiento es: ".$fecnac."</br>";
    }
  }

  abstract public function edad($edad);
/*
Forma 1
  public function sexo($sexo){
    if ($sexo!="M" && $sexo!="F" && $sexo!="O") {
      echo "Dato no valido </br>";
      return false;
    }
    echo " y su Sexo es: ".$sexo."</br>";
  }
  */

//Forma 2
    public function sexo(){
      if ($this->sexo!="M" && $this->sexo!="F" && $this->sexo!="O") {
        echo "Dato no valido </br>";
      }else {
        echo " y su Sexo es: ".$this->sexo."</br>";
      }
    }
}

class Ciudadano extends Persona
{
  public function edad($edad){
    if (!is_numeric($edad)) {
      echo "Edad no valida </br>";
      return false;
    }

    if ($edad>110) {
      echo "Edad no valida </br>";
      return false;
    }

    echo " y su Edad es: ".$edad."</br>";
  }
}

$objPersona = new Ciudadano('Juan Perez', 'Av. Cascanueces 123 los Nogales');
$objPersona->fecnac("06/01/2010");
$objPersona->edad("40");
//$objPersona->sexo("M");

/*
$objPersona->setNombre('Juan Perez');
$objPersona->setDireccion('Av. Cascanueces 123 los Nogales');
echo " La persona se llama: ".$objPersona->getNombre(). "</br>"
*/


 ?>
