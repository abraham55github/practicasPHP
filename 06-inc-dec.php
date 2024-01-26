<?php include 'includes/header.php';

$numero1 = 29;

if ($numero1 == 30){
    $numero1++;
    echo $numero1;
}else if($numero1 < 30){
    $numero1--;
    echo ++$numero1; //puedes imprimir la variable con un ++ si lo colocas al principio de esta
}else if($numero1 > 30){
    $numero1+= 5; //incrementa la variable al numero que agregues.
    echo $numero1;
}


include 'includes/footer.php';