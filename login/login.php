<?php
$usuario  = $_POST ["usuario"];  //cerrar siempre la linea con ; 
$contrasenia = $_POST ["pass"];

$ckusuario = "admin";  //es decir valor string
$ckpass = 1234;  // es decir valor numerico

if ($usuario == $ckusuario && $contrasenia == $ckpass) {
    
header ("location:https://www.potrerodigital.org/");
}else {
    echo "Incorrecto";
    header ("location:login.html");
}

?>