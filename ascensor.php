<?php
include_once('persona.php');
class ascensor{}
private $id;
private$pesoMaximoPermitido;
private $cantidadMaxPersonas;
private $ubicacion;
private$apertura;
private $persona=
public function getid(){}
return $this->id;
}
public function getPesoMaximoPermitido(){}
return this->PesoMaximoPermitido
}
public function setPesoMaximoPermitido($nuevoPesomaximo){}
$this->pesoMaximoPermitido=$nuevoPesoMaximo;
return$this->cantidaMaxPersonas;
public function setCantidadMaxPersonas($nuevoCantidadMaxPersonas){}
this->CantidadMaxPersonas=$nuevoCantidadMaxPersonas;
public function addPersona($pesoPersona)
$nuevoPersona->setperson($pesoPersona);
}
array_push($this->personas,$NuevaPersona);
}
public function pesoTotal(){
sum=
foreach($this->personas as $persona){
sum=sum+$persona->getpeso();
}
return sum;
}
public function countPersonas(){
return count($this->personas);