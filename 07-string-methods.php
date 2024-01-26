<?php include 'includes/header.php';

$nombreCliente = "juan pablo";

echo strlen($nombreCliente);
var_dump($nombreCliente);

//eliminar espacios en blancos
$texto = trim($nombreCliente);
echo strlen($texto);

//convertirlo a mayusculas
echo strtoupper($nombreCliente);


//convertirlo a minusculas
echo strtolower($nombreCliente);

$mail = "correo@correo.com";
$mail1 = "Correo@correo.com";

var_dump(strtolower($mail) === strtolower($mail1));

echo str_replace('Juan', 'J', $nombreCliente); //cambiar el string por otro

echo strpos($nombreCliente, 'juan'); //revisar existencia de string

echo "<br>";

echo "El cliente " . $nombreCliente . " es premiun"; //concatenacion

echo "<br>";

echo "El cliente {$nombreCliente} es premiun"; //otra forma de concatenacion



include 'includes/footer.php';