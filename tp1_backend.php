<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Imprimir por pantalla "Hola mundo"
    echo "Hola mundo" ."<br/>";
    //Cargar la variable y mostrar "Hola mundo"
    $saludo = "Hola mundo";
    echo $saludo . "<br/>";
    //Crear 2 variables enteras y mostrar por pantalla la +, la -, la *, la / y el %
    $numero1 = 100;
    $numero2= 50;
    //Suma 
    $suma = $numero1 + $numero2; 
    echo "La suma de 100 + 50 es: " . $suma . "<br/>";
    //Resta
    $resta = $numero1 - $numero2;
    echo "La resta de 100 - 50 es: " . $resta . "<br/>";
    //Multipliacion
    $multiplicacion = $numero1 * $numero2;
    echo "La multiplicacion de 100 * 50 es: " . $multiplicacion . "<br/>";
    //División
    $division = $numero1 / $numero2;
    echo "La division de 100 / 50 es: " . $division . "<br/>";
    //Resto
    $resto = $numero1 % $numero2;
    echo "El resto de 100 % 50 es: " . $resto . "<br/>";
    //Transformacion de 20° Celcius a F°
    $transformacion = 20 * 9/5 + 32;
    echo "La transformacion de 20°C a F° es: " . $transformacion . "<br/>";
    //Calcular perimetro y area de un rectangulo cuya base es 18cm y altura 12cm
    $base= 18 ;
    $altura= 12;
    $perimetro= 2 * ($base + $altura);
    echo "El perimetro del rectangulo es: " . $perimetro . "<br/>";
    $area= $base * $altura;
    echo "El area del rectangulo es: " . $area . "<br/>";
    //Calcular perimetro y area de un circulo dado que su radio es 30cm
    $radio= 30;
    $pi=3.14;
    $perimetroCirculo=2*$pi*$radio;
    echo "El perimetro del circulo es: " . $perimetroCirculo . "<br/>";
    $areaCirculo= $pi*pow($radio,2);
    echo "El area del circulo es: " . $areaCirculo;
    ?>
</body>
</html>