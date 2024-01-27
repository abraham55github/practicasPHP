<?php include 'includes/header.php';

$carrito = ['Celular', 'Computadora', 'Avion'];
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3'); //otra forma de crear arrays



echo "<pre>";
var_dump($clientes);
echo "</pre>";



// Util para ve rlos contenidos de un arrays
echo "<pre>";
var_dump($carrito);
echo "</pre>";


//acceder a un elemento del array
echo $carrito[0];

//añadir al array desde variables
$carrito[3] = 'Nuevo Producto...';

//añadir al array desde una funcion
array_push($carrito, 'Audifonos');

//añadir al inicio
array_unshift($carrito, 'Aeronave');


echo "<pre>";
var_dump($carrito);
echo "</pre>";




include 'includes/footer.php';