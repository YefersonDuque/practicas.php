<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /*for($i=10;$i>=0;$i--){
        
        echo "<p>Hemos entrado al bucle for. $i </p>";

        if($i>1){

            echo "sigue restando . $i <br>";
        }
        else
        {
            echo "El bucle es menor que cero . $i <br>";
        }

    }*/

    //Tabla 

    for($i=0;$i<=10;$i++){
        for($j=0;$j<=10;$j++){
        
        if($j==0){
            echo "cero. <br>";

            continue;
        }

        echo "$i x $j = ". $i*$j . "<br>";
        if($j==10){
            echo "------------------------<br>";
        }
        }
    }


?>
</body>
</html>