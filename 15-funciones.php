<?php 
declare(strict_types=1);
include 'includes/header.php';



function sumar( int $numero1, int $numero2) {
    echo $numero1 + $numero2;
    echo "<br>";
    echo $numero1 * $numero2;
    echo "<br>";
    echo $numero1 / $numero2;
    echo "<br>";
    echo $numero1 - $numero2;
}

sumar(numero2: 15, numero1:24);



include 'includes/footer.php';