<?php

ini_set('display_errors', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@email.com', '123456');
$c1->setNome('Chiquim');
$c1->setDataCadastro('11/06/2022');

$g1 = new Gestor('zezim@email.com', '654321', 6520.98);
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@email.com', '1q2w3e', 8570.90);

echo "<pre>";
  var_dump($c1);
  var_dump($g1);
  var_dump($gg1);
echo "</pre>";


include 'Validar.php';
$cpf = "123456789";

Validar::validarCpf($cpf);

// CPF Inválido