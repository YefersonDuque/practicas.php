<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    //$palabra="YEFeR";
    
    //Pasa todo el texto a minuscula
    //echo(strtolower($palabra));
    
    //Pasa todo el texto a mayuscula
    //echo(strtoupper($palabra));

    /*function suma($num1,$num2){
        $resultado=$num1 + $num2;
        return $resultado;
    }
    echo(suma (5,7));
    */

    function frase_mayus($frase,$conversion=true){

        $frase=strtolower($frase);

        if($conversion==true){
            //Para poner la primer letra en mayuscula
            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);
        }
        return $resultado;
    }
    echo(frase_mayus("Esto es una prueba",false));

?>
</body>
</html>