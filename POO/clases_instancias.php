<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Persona{

        public function __construct(
            private string $nombre,
            private int $edad,
            private string $genero,
            private string $nacionalidad
        ){}

        //Métodos para obtener las propiedades.
        public function getNombre(){
            return $this->nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function getNacionalidad(){
            return $this->nacionalidad;
        }

        //Métodos para establecer las propiedades
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        public function setGenero($genero){
            $this->genero=$genero;
        }
        public function setNacionalidad($nacionalidad){
            $this->nacionalidad=$nacionalidad;
        }
    }

    //Crea una instancia a Persona
    $persona = new Persona("Yeferson",29,"Masculino","Colombiano");
    
    //Acceder a las propiedades 
    echo "Nombre: " . $persona->getNombre() . "<br>";
    echo "Edad: " . $persona->getEdad() . "<br>";
    echo "Género: " . $persona->getGenero() . "<br>";
    echo "Nacionalidad: " . $persona->getNacionalidad() . "<br>";

    ?>
</body>

</html>
