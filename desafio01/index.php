<!-- Criar classes (Curso, professor, disciplina), colocar 3 atributos em cada classe -->

<?php

include "Curso.php";
include "Professor.php";
include "Disciplina.php";

$cursoDeProgramacao = new Curso();
$cursoDeProgramacao -> nome = "Programação PHP";
$cursoDeProgramacao -> carga_horaria = "500 horas";
$cursoDeProgramacao -> professores = [$professorAle]; // Pode ter mais de um professor
$cursoDeProgramacao -> disciplinas = [$disciplinaPHP];

$professorAle = new Professor();
$professorAle -> nome = "Alessandro";
$professorAle -> cursos = [$cursoDeProgramacao];     // Pode ter mais de um curso
$professorAle -> disciplinas = [$disciplinaPHP];     // Pode ter mais de uma disciplina

$disciplinaPHP = new Disciplina();
$disciplinaPHP -> curso = $cursoDeProgramacao;
$disciplinaPHP -> professor = $professorAle;
$disciplinaPHP -> duracao = "15 horas";

echo "<pre>";
  var_dump($cursoDeProgramacao);
  var_dump($professorAle);
  var_dump($disciplinaPHP);
echo "</pre>";