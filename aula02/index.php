<?php
ini_set('display_errors', 1);

include 'Produto.php';

$produto1 = new Produto();
$produto1 -> getNome('Tenis para Corrida');
$produto1 -> setValor(299.00);

echo $produto1 -> getValor();

$produto2 = new Produto();
$produto2 -> setNome('Calça Jeans');
$produto2 -> setValor(100);



echo "<pre>";
  var_dump($produto1);
  var_dump($produto2);
echo "</pre>";