<?php
ini_set('display_errors', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unixex');
$c2 = new Categoria('Roupas de banho', 'Toalhas, toalhas para rosto e etc..');

$c3 = new Categoria('Calçados', 'Calçados em geral');

$produto1 = new Produto('Tenis', 299.50, $c3);
$produto1 -> setDescricao('Tenis para corrida profissional');
$produto1 -> setNome('Tenis para Corrida');
$produto1 -> setValor(299.00);
$produto1 -> setCategoria($c2);

echo $produto1 -> getValor();

$produto2 = new Produto('Calça Jeans', 100.90, $c1);
// $produto2 -> setNome('Calça Jeans');
// $produto2 -> setValor(100);

$produto3 = new Produto('Calça branca', 159.99, $c1);
// $produto3 -> setNome('Calça branca');




echo "<pre>";
  var_dump($produto1);
  var_dump($produto2);
  var_dump($produto3);
  // var_dump($c1);
  // var_dump($c2);
  // var_dump($c3);
echo "</pre>";