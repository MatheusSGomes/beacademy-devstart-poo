<?php
declare(strict_types=1);

class ValidarUS implements Validar
{

  public function validarDocumento(string $documento): void
  {
    if (strlen($documento) !== 9) {
      die('SSN inválido!');
    }
  }

  public function validarCodigoPostal(string $codigoPostal): void
  {
    // ...
  }

  public function validarNome(string $nome): void
  {
    // ...
  }
}