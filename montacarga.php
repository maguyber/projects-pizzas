<?php

include_once('persona.php');
class montacarga
{

private $id;
private $pesoMaximoPermitido;
private $montacarga;
private $apertura;
private $pesocarga = [];

public function getid()
{
 return $this->id;
}
public function setId($nuevoId)
{
 $this->id=$nuevoid;    
 $pesoTotalPersonas = $this->pesoTotal();
    if ($pesoTotalPersonas > $this->pesoMaximoPermitido) {
      return false;
    } else
      return true;