<?php

use function PHPSTORM_META\map;

 include 'includes/header.php';

//in_array - buscar elementos en un arreglo

$carrito = ['tablet', 'Computadora', 'Television'];

var_dump( in_array('Computadora', $carrito));
var_dump( in_array('tablet', $carrito));


//ordenar elementos de un arreglo
$numeros = array(1,4,2,7,5,8,6);
sort($numeros); //ordena cadenas numericas
rsort($numeros); //

echo "<pre>";
var_dump($numeros);
echo "</pre>";


$cliente = array(
    'saldo' => 200,
    'tipo' => 'premiun',
    'nombre' => 'Abraham'
);

asort($cliente); //ordena por valores
ksort($cliente); //ordena por llaves

echo "<pre>";
var_dump($cliente);
echo "</pre>";




include 'includes/footer.php';