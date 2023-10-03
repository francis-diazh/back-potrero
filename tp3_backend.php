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
    for ($i=0 ; $i <= 100 ; $i++ ) { 
        print "<p>$i</p> \n";
    }

    print "<p>Ejercicio 2</p> \n";
    for ($i=100 ; $i > 0 ; $i-- ) { 
        print "<p>$i</p> \n";
    }

    print "<p>Ejercicio 3 y 4</p> \n";
    for ($i=1; $i <=100; $i++) {
        if ($i%2==0){
            echo ($i). '<br/>';
        }else{
            echo ($i).'<br/>';
        }
    }
    

    print "<p>Ejercicio 5</p> \n";

    $suma=0;
    for ($i=1;$i <=20 ; $i++) {
        $suma = $suma+$i;
        echo 'suma: '.($suma).'<br/>';

    }

    print "<p>Ejercicio 6</p> \n";
    $suma1=0;
    for($i=1;$i <=20; $i++){
        $suma1 += $i;
        if ($suma1%2 == 0) {
            echo 'suma par: '.($suma1).'<br/>';
        }
    }


?>
</body>
</html>