<?php

ini_set('display_errors', 1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$br = new ValidarBR();
$br->validarDocumento("123456789");    // Inválido por ter só 9 digitos (11 necessários)
// CPF inválido!

$us = new ValidarUS();
$us->validarDocumento("12345678");    // Inválido por ter só 8 digitos (9 necessários)
// SSN inválido!
