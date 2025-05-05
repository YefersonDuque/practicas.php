<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>

    .resaltar{
        color: red;
        font-weight:bold;
    }

    </style>
</head>
<body>
<?php

    $variable1="casa";
    $variable2="CAS";

    $resultado=strcasecmp($variable1,$variable2);//Devuelve 1 si no son iguales. Devuelve 0 si son iguales.

    //echo "El resultado es: " . $resultado;

    if(!$resultado){
        echo "No coincide";
    }
    else{
        echo "Coincide";
    }
?>
</body>
</html>