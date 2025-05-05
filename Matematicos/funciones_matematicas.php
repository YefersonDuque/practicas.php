<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1=rand(1,10);//Número random
    $num2=pow(5,5);//Potencia
    $num3=1.56929;//Redondear

    echo "Número random: $num1<br>";
    echo "Número potencia: $num2<br>";
    echo "Número redondeado:" .  round($num3,1);
    /*Para redondear solo con un número se pone solo la variable: round($num3);,cuando al redondear quiere que se muestre otro número y sonvarios los npumeros flotantes, despues del punto se pone despes del punto la cantidad de datos que necesita: round($num3,2);*/ 

    ?>
</body>
</html>