<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Utente.php";
require_once __DIR__ . "/CreditCard.php";
require_once __DIR__ . "/Cuccia.php";


$monge = new Cibo("Monge", "50", "cane", "20");
$selex = new Cibo("Selex", "30", "gatto", "15");
$dogHome = new Cuccia("DogHome", 100, "cane", "medio");

$pietro = new Utente();
$pietro->addProductToCart($monge);
$pietro->addProductToCart($selex);
$pietro->addProductToCart($dogHome);

$pietro->register("Pietro", "pietro@gmail.com");
// $pietro_credit_card = new CreditCard(80708868606, "04/24", 393);
$pietro->setMetodoPagamento(new CreditCard(2340294209482, "02/25", 345));
var_dump($pietro);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php echo $monge->printInfo(); ?>
  <br>
  <?php echo $selex->printInfo(); ?>
  <br>
  <p>Totale carello: €<?php echo $pietro->getTot(); ?> </p>

  <p> <?php echo $pietro->pay(); ?> </p>


</body>

</html>