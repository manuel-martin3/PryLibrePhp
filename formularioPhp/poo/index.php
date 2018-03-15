<?php
class Automovil
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

    public function Avanzar($metros)
    {
      if (!is_numeric($metros)) {
        echo "Valor no admitido";
        return false;
      }
      $this->distancia=$this->distancia+$metros;
      echo " Distancia Total recorrida: ". $this->distancia."</br>";
    }

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
    echo"_____Sexy?Sex						 </br>";
    echo"____?Sexy?Sexy                      </br>";
    echo"___y?Sexy?Sexy?                     </br>";
    echo"___?Sexy?Sexy?S                     </br>";
    echo"___?Sexy?Sexy?S                     </br>";
    echo"__?Sexy?Sexy?Se                     </br>";
    echo"_?Sexy?Sexy?Se                      </br>";
    echo"_?Sexy?Sexy?Se                      </br>";
    echo"_?Sexy?Sexy?Sexy?                   </br>";
    echo"?Sexy?Sexy?Sexy?Sexy                </br>";
    echo"?Sexy?Sexy?Sexy?Sexy?Se             </br>";
    echo"?Sexy?Sexy?Sexy?Sexy?Sex            </br>";
    echo"_?Sexy?__?Sexy?Sexy?Sex             </br>";
    echo"___?Sex____?Sexy?Sexy?              </br>";
    echo"___?Sex_____?Sexy?Sexy              </br>";
    echo"___?Sex_____?Sexy?Sexy              </br>";
    echo"____?Sex____?Sexy?Sexy              </br>";
    echo"_____?Se____?Sexy?Sex               </br>";
    echo"______?Se__?Sexy?Sexy               </br>";
    echo"_______?Sexy?Sexy?Sex               </br>";
    echo"________?Sexy?Sexy?sex              </br>";
    echo"_______?Sexy?Sexy?Sexy?Se           </br>";
    echo"_______?Sexy?Sexy?Sexy?Sexy?        </br>";
    echo"_______?Sexy?Sexy?Sexy?Sexy?Sexy    </br>";
    echo"_______?Sexy?Sexy?Sexy?Sexy?Sexy?S  </br>";
    echo"________?Sexy?Sexy____?Sexy?Sexy?se </br>";
    echo"_________?Sexy?Se_______?Sexy?Sexy? </br>";
    echo"_________?Sexy?Se_____?Sexy?Sexy?   </br>";
    echo"_________?Sexy?S____?Sexy?Sexy      </br>";
    echo"_________?Sexy?S_?Sexy?Sexy         </br>";
    echo"________?Sexy?Sexy?Sexy             </br>";
    echo"________?Sexy?Sexy?S                </br>";
    echo"________?Sexy?Sexy                  </br>";
    echo"_______?Sexy?Se                     </br>";
    echo"_______?Sexy?                       </br>";
    echo"______?Sexy?                        </br>";
    echo"______?Sexy?                        </br>";
    echo"______?Sexy?                        </br>";
    echo"______?Sexy                         </br>";
    echo"______?Sexy                         </br>";
    echo"_______?Sex                         </br>";
    echo"_______?Sex                         </br>";
    echo"_______?Sex                         </br>";
    echo"______?Sexy                         </br>";
    echo"______?Sexy                         </br>";
    echo"_______Sexy                         </br>";
    echo"_______ Sexy?                       </br>";
    echo"________SexY                        </br>";
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
