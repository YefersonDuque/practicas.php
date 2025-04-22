<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Usuario</title>

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
</head>
<body>

    <h1>USANDO OPERADORES DE COMPARACIÓN</h1>

    <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
        <table width="30%" align="center">
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td>
                    <input type="text" name="edad_usuario" id="edad_usuario">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="enviando" id="enviando" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
<?php
?>
</body>
</html>
