<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$estado=2;

$resultado = match ($estado) {
    1 => "Pendiente",
    2 => "En proceso",
    3 => "Completado",
    default => "desconocido",
};

echo $resultado;

//ejemplo 2. Comparaciones estrictas.

$valor='2';

$resultado1 = match($valor){

    2 => "Número 2",
    '2' => "String 2"

};

echo $resultado1;

//ejemplo 3. Multiples valores

$estado = 'a';

$resultado2 = match($estado){
    'a','b','c' => 'Letra',
    '1','2','3' => 'Número',
    default => 'Desconocido'
};

echo $resultado2;

//Lanza excepciones si no hay coincidencias. Si no tiene un default y no cumple con lo que se le indica continua pero con error.

$estado = 4;

$resultado3 = match ($estado) {
    1 => "pendiente",
    2 => "en proceso",
    3 => "completado"
};

?>


</body>
</html>