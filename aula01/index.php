<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> setNome('Alessandro');
$p1 -> setCpf('897.468.452-45');
$p1 -> setSalario(2850.0);

echo "<pre>";
var_dump($p1);
echo "</pre>";