<?php include 'includes/header.php';

//tipos de datos en php los mas utilizados

//boolean 

$logueado = false; //sin comillas para utilizarla de forma booleana - True o false

var_dump($logueado);

//probando el lenguaje desde mi perspectiva
if ($logueado == false) {
    echo"Esto es falso";
}

//enteros

$numero = 200;
var_dump($numero);


//Floats

$numero2 = 200.2;
var_dump($numero2);

// strings
$string = "Que xopa io";
var_dump($string);

//arreglos

$arreglo = [];
var_dump($arreglo);




include 'includes/footer.php';