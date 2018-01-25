<?php

class agencia
{
public $agencia;
public $conta;
public  static $contador=0; //atributo da classe

function __construct($agencia){//isso obriga a passarmos valor no momento de criação da classe
  $this->agencia=$agencia;
  self::$contador++; //contagem de objetos criados
}
function dame_agencia(){
  return $this->agencia;

}
}

$agencia=new agencia(1234);
echo "contador:" . agencia::$contador . PHP_EOL;// acesso ao atributo da classe
$agencia1=new agencia(5678);
echo "contador:" . agencia::$contador . PHP_EOL;


echo "agencia de numero:" . $agencia->agencia . PHP_EOL;
echo "agencia de numero1:" . $agencia1->agencia . PHP_EOL;

echo "agencia de numero:" . $agencia->dame_agencia() . PHP_EOL;
echo "agencia de numero:" . $agencia1->dame_agencia() . PHP_EOL;
 ?>
