<?php include 'includes/header.php';

function usuarioAutenticado(bool $autenticado): string {
    if($autenticado){
        return "el usuario esta autenticado";
    }else {
        return "el usuario no esta utenticado";
    };
};

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';