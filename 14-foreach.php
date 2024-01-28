<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'televisor',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'computador',
        'precio' => 700,
        'disponible' => false
    ],

];

foreach( $productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"] ?></p>
        <p>Precio: <?php echo $producto["precio"] ?></p>
        <p> <?php echo ($producto['disponible']) ? 'disponible' : 'No disponible'; ?> </p>

        <?php
           /*  if($producto['disponible']){
                echo "<p> Disponible </p>";
            }else {
                echo "<p> No disponible </p>";
            }; */
        ?>  

    </li>

<?php

echo "<pre>";
var_dump($producto);
echo "</pre>";
}

include 'includes/footer.php';