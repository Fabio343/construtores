<?php

class agencia
{
public $agencia;
public $conta;

function __construct($agencia){//isso obriga a passarmos valor no momento de criação da classe
  $this->agencia=$agencia;
}
function dame_agencia(){
  return $this->agencia;
}
}

$agencia=new agencia(1234);
$agencia1=new agencia(5678);


echo "agencia de numero:" . $agencia->agencia;
echo "agencia de numero1:" . $agencia1->agencia;

echo "agencia de numero:" . $agencia->dame_agencia();
echo "agencia de numero:" . $agencia1->dame_agencia();
 ?>
