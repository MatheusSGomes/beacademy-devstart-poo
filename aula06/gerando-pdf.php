<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$html = '';

for ($n = 0; $n < 10; $n++) {
  $html .= 'Ó o pente! <br>';
}

$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Música: Ó o pente!</h1><hr>' . $html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();
$dompdf->stream();
