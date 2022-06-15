<?php
require_once __DIR__ . "/Iva.php";

class Utente
{

  public $name;
  public $mail;
  public $carello = [];
  public $metodoPagamento;

  use Iva;

  public function addProductToCart($_product)
  {
    if ($_product->prezzo && $_product->disponibile) {
      $this->carello[] = $_product;
    } else {
      throw new Exception("Non disponibile");
    }
  }

  public function getTot()
  {
    $total_sum = 0;
    foreach ($this->carello as $prodotto) {
      $total_sum = $total_sum + $prodotto->prezzo;
    }
    if ($this->isRegister()) {
      $total_sum = $total_sum - ($total_sum / 100) * 20;
    }
    return $total_sum + ($total_sum * $this->iva / 100);
  }

  public function register($_name, $_mail)
  {
    $this->name = $_name;
    $this->mail = $_mail;
  }

  public function isRegister()
  {
    if ($this->name && $this->mail) {
      return true;
    }
  }

  public function setMetodoPagamento($_metodoPagamento)
  {
    $this->metodoPagamento = $_metodoPagamento;
  }

  public function pay()
  {
    if ($this->metodoPagamento->isValid()) {
      return "Hai pagato";
    } else {
      return "Errore di pagamento";
    }
  }
}
