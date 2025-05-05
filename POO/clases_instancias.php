<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Coche
    {

        var $ruedas;
        var $color;
        var $motor;

        function __construct()
        { // Constructor moderno
            $this->ruedas = 4;
            $this->color = "";
            $this->motor = "1600"; // Corrección aquí
        }

        function arrancar()
        {
            echo "Estoy arrancando<br>";
        }

        function girar()
        {
            echo "Estoy girando<br>";
        }

        function frenar()
        {
            echo "Estoy frenando<br>";
        }
    }

    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    $mazda->girar();
    echo $mazda->ruedas;
    ?>
</body>

</html>
