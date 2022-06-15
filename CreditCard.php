
<?php
class CreditCard
{
  public $numero_carta;
  public $scadenza;
  public $cvc;

  function __construct($_numero_carta, $_scadenza, $_cvc)
  {
    $this->numero_carta = $_numero_carta;
    $this->scadenza = $_scadenza;
    $this->cvc = $_cvc;
  }

  public function isValid()
  {
    $oggi = new \DateTime('midnight');
    $scadenza_datetime = \DateTime::createFromFormat("m/y", $this->scadenza);
    return $oggi < $scadenza_datetime;
  }
}
?>