<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro', 'juan', 'Abraham');

//empty - revisa si un arreglo esta vacio

var_dump( empty($clientes));
var_dump( empty($clientes3));
var_dump( empty($clientes2));

//isset - revisar si un arreglo esta creado o propiedades definidas
echo"<br>";
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['codigo']));




include 'includes/footer.php';