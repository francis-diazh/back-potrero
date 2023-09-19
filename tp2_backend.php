<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios</h1>
    <?php
    

    $variableA = 2;

    if ($variableA > 0){
        echo $variableA . " es un numero positivo "."<br>";
    }else {
        echo "No es un numero positivo";
    }

    $variableB = 3;


    if ($variableB > 1 & $variableB < 10) {
        echo $variableB . " es mayor a 1 y menor a 10" ."<br>";
    }

    $variableC = 1;


    if ($variableC > 10 || $variableC < 2){
        echo  $variableC . " cumple la condicion" ."<br>";
    }else{
        echo $variableC . " no cumple la condicion" ."<br>";
    }


    $numero1 = 5;
    $numero2 = 5;


    if ($numero1 > $numero2){
      echo "<br>";
      echo $numero1 + $numero2;
      echo "<br>";
      echo $numero1 - $numero2;
    }elseif ($numero2 > $numero1){
        echo "<br>";
        echo $numero1 * $numero2;
        echo "<br>";
        echo $numero1 / $numero2;
        echo "<br>";
        echo $numero1 % $numero2;
    }else{
        echo "<br>";
        echo "Los numeros ingresados son iguales";
    }

    
    ?>
</body>
</html>