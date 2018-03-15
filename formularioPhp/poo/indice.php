<?php

interface Estado
{
  public function cambiarEstado();
}


abstract class Automovil implements
{
    public $motor;
    public $nombre;
    public $estado;
    public $distancia;
    public function __construct($nombre, $motor)
    {
      $this->setNombre($nombre);
      $this->setMotor($motor);
      $this->cambiarEstado();
      $this->estado = 'Encendido';
      $this->distancia = 0;
      /*
      echo  "El automovil es ".$this ->getNombre()."</br>".
            " y su motor es ".$this->getMotor()."</br>" ." y su estado es ".
            $this->estado ."</br>";
            */
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setMotor($motor)
    {
      $this->motor = $motor;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function cambiarEstado()
    {
      $this->estado == true? $this->estado = 'Apagado': $this->estado='Encendido' ;
    }

    abstract public function Avanzar($metros);

    public function Frenar()
    {
      echo "El auto se ha detenido </br>";
    }

    public function Girar($direccion)
    {
      if (($direccion!='derecha') && ($direccion!='izquierda')) {
        echo "opcion no valida";
        return false;
      }
      echo "El auto ha girado a la ". $direccion."</br>";
    }

}

class Deportivo extends Automovil
{
  public function turbo(){
    $this->distancia=$this->distancia+100;
    echo "Wow le metiste turbo y avanzaste ......:::::::::#####==>(". $this->distancia." Km) </br>";
  }

  public function avanzar($metros){
    if (!is_numeric($metros)) {
      echo "Valor no admintido";
      return false;
    }
    $this->distancia=$this->distancia+$metros;
    echo " Distancia Total recorrida: ". $this->distancia."</br>";
  }
}

$corvette = new Deportivo('corvette', 4.0);
$corvette->Avanzar(20);
$corvette->Frenar();
$corvette->Girar('derecha');
$corvette->turbo();
//$corvette->setNombre("corvette");
//$corvette->setMotor(4.0);

//echo $corvette->getNombre()."==".$corvette->getMotor();

 ?>
