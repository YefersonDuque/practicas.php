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
if(isset($_POST["enviando"])){
    $nombre=$_POST["nombre_usuario"];
    $contra=$_POST["contra"];

    switch(true){
        case $nombre=="Maria"  && $contra==1234:
            echo "Puedes ingresar";
        break;
        case $nombre=="Pedro"  && $contra==1234:
            echo "Puedes ingresar";
        break;
        case $nombre=="Yefer"  && $contra==1234:
            echo "Puedes ingresar";
        break;
    
        default:
            echo "No autorizado";
}}
?>