<?php include 'includes/header.php';

$variable = "Abraham"; //variables

$numero1 = 12;
$numero2 = 14;

$numero3 = $numero1 + $numero2;

define('constante', "este es el valor de la constante"); //forma de utilizar constantesn en php

const constante2 = "esta constante es la 2"; // 2 forma de utilizar constantes me gusta mas esta

echo ($numero3);

var_dump($numero3);

echo (constante);

echo (constante2);

include 'includes/footer.php';