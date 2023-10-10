<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

print "<p>Ejercicio 1</p> \n";

$arrayPares = [2,4,6,8,10,12,14,16,18,20];
print "<pre>\n";
// print_r($arrayPares);
print "<pre>\n";
foreach ($arrayPares as $value) {
    print "<p>$value</p>\n";
}
print "<p>Ejercicio 2</p>\n";

$arrayDatos = ["Pedro", "Ana", 34,1];
print "<pre>\n";
print_r($arrayDatos);
print "<pre>\n";

print "<p>Ejercicio 3</p>\n";

$arrayAsociativo = ['nombre' => "Pedro", 'apellido' => "torres", 'direccion'=> "av. mayor 3703", 'telefono' => 1122334455];
print_r ($arrayAsociativo);
print "<pre>\n";

print "<p>Ejercicio 4</p>\n";

$ciudades = ["Madrid","Barcelona","Londres","Nueva york","Los angeles","Chicago"];

foreach ($ciudades as $key => $value) {
    print "<pre>\n";
    print ("La ciudad con el indice: $key tiene el nombre: $value");
    print "<pre>\n";

}
print "<pre>\n";

print "<p>Ejercicio 5</p>\n";

$citys = ['MD'=> "Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"Nueva York", 'LA'=> "Los Angeles", 'CGG'=>"Chicago"];
foreach ($citys as $key => $value) {
    print "<pre>\n";
    print ("El indice de $value es $key");
    print "<pre>\n";
}







?>
    
</body>
</html>