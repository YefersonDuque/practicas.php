<style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFC;
            padding: 5px;
            border: 5px solid #666;
        }

        .no_validado {
            font-size: 18px;
            color: #F00;
            font-weight: bold;
            text-align: center;
        }

        .validado {
            font-size: 18px;
            color: #0c3;
            font-weight: bold;
            text-align: center;
        }
</style>
<?php
        if (isset($_POST["enviando"])) {

            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];

            if ($usuario == "Yefer" && $edad >= 18) {
                echo "<p class='validado'>Puedes entrar</p>";
            } else {
                echo "<p class='no_validado'>No puedes entrar</p>";
            }
        }
    ?>