<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    include("herencia.php");

    $mazda= new Coche();
    $pegaso=new Camion();

    echo "El mazda tiene: " . $mazda->ruedas . " ruedas.<br>";
    echo "El pegaso tiene: " . $pegaso->ruedas . " ruedas.<br>";

    $pegaso->frenar();
    $pegaso->arrancar();
    $pegaso->establecer_color("pegaso","Rojo");

?>
</body>

</html>
