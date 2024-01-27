<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'Salgo' => 300,
    'Licencia' => true
];

echo"<pre>";
var_dump($cliente);
echo"</pre>";

echo $cliente['Licencia'];

$cliente['codigo'] = 1201112;

echo"<pre>";
var_dump($cliente);
echo"</pre>";

include 'includes/footer.php';