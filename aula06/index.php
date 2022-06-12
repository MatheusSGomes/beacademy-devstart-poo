<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Olá Mundo</h1><hr><p>Teste!!</p>');

// (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

// ------------------------------

// use Classes\Categoria;

// use Classes\Usuario;
// use Classes\Config\Usuario as UsuarioConfig;

// $user = new Usuario();
// $userConfig = new UsuarioConfig();

// $categoria1 = new Categoria();

// var_dump($categoria1);
// var_dump($userConfig);
// var_dump($user);


// use Classes\Config\Usuario as UsuarioConfig;

// $usr1 = new Classes\Usuario();
// $usr2 = new UsuarioConfig();

// var_dump($usr1);
// var_dump($usr2);



