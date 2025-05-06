

<?php
//Reutilizar código
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
        function establecer_color($nombre_coche,$color_coche){
            $this->color=$color_coche;

            echo "El color del coche " . $nombre_coche . " es: " . $this->color."<br>";
        }
    }

    // $renault = new Coche();
    // $mazda = new Coche();
    // $seat = new Coche();

    // $mazda->girar();
    // echo $mazda->ruedas;

    // $renault->establecer_color("Renaul","Rojo");
    // $seat->establecer_color("Seat","Azul");

    //--------------------------------------------------------------------------

    class Camion
    {

        var $ruedas;
        var $color;
        var $motor;

        function __construct()
        { // Constructor moderno
            $this->ruedas = 8;
            $this->color = "gris";
            $this->motor = "2600"; // Corrección aquí
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

    // $renault = new Camion();
    // $mazda = new Camion();
    // $seat = new Camion();

    // $mazda->girar();
    // echo $mazda->ruedas;

    // $renault->establecer_color("Renaul","Rojo");
    // $seat->establecer_color("Seat","Azul");
    ?>