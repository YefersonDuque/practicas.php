<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
//Valor por parametro
// function incrementa($valor1){
//     $valor1++;
//     return $valor1;
// }
// $numero=3;
// echo incrementa($numero) ."<br>";

// echo  $numero;

//Valor por referencia con el "&"
// function incrementa(&$valor1){
//     $valor1++;
//     return $valor1;
// }
// $numero=3;
// echo incrementa($numero) ."<br>";

// echo  $numero;

function cambia_mayus(&$param){
    $param = strtolower($param);
    $param = ucwords($param);

    return $param;
}

$cadena="HolA MuNDo";

echo cambia_mayus($cadena) . "<br>";

echo $cadena;


?>
</body>
</html>