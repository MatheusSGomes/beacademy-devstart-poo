<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$a1 = new Aluno();
$a1 -> nome = 'Matheus';
$a1 -> cpf = '456.789.147-45';

$a1 -> nome .= ' Gomes';
 

$cursoPHP = new Curso();    // objeto Curso
$cursoPHP -> nome = "Introdução ao PHP";
$cursoPHP -> carga_horaria = 100;
$cursoPHP -> descricao = "Do básico ao intermediário";

$professorAle = new Professor();
$professorAle -> nome = "Alessandro";
$professorAle -> salario = 15000;
$professorAle -> cpf = "456.789.369-78";

// $aluno1 = [
//   'nome' => 'Alessandro',
//   'cpf' => '123.654.987-12'
// ];

// $aluno2 = [
//   'nome' => 'Bruno',
//   'cpf' => '789.654.987-32'
// ];

// $aluno3 = [
//   'nome' => 'Rachel',
//   'cpf' => '456.654.987-78'
// ];

echo "<h1>Aluno: {$a1->nome}</h1>";

?>