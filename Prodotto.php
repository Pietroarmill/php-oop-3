<?php

class Prodotto
{
  public $nome;
  public $prezzo;
  public $animale;
  public $peso;

  function __construct($_nome, $_prezzo, $_animale, $_peso)
  {
    $this->nome = $_nome;
    $this->peso = $_peso;
    $this->prezzo = $_prezzo;
    $this->animale = $_animale;
  }

  public function printInfo()
  {
    return "$this->nome $this->peso kg €$this->prezzo $this->animale";
  }
}
?>