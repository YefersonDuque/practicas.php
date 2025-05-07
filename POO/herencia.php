

<?php
//herencia
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
    //--------------------------------------------------------------------------
    class Camion extends Coche
    {

        function __construct()
        { // Constructor moderno
            $this->ruedas = 8;
            $this->color = "gris";
            $this->motor = "2600"; // Corrección aquí
        }
        //Sobre escritura de método al recibir por herencia. 
        function establecer_color($nombre_camion,$color_camion){
            $this->color=$color_camion;

            echo "El color del camion " . $nombre_camion . " es: " . $this->color."<br>";
        }

        function arrancar(){
            parent::arrancar();
            echo "Camión arrancando<br>";
        }

    }
?>