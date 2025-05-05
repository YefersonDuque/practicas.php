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
    $contra=$_POST["contra"];
    $nombre=$_POST["nombre_usuario"];
/*
if($edad<18){
    echo "Eres mayor de edad.";
}else{
    echo "Eres menor de edad";
}*/

//esta es la condición ternaria, que hace lo mismo del if pero reducido

echo $nombre=="Yefer" && $contra=="1234" ? "Correcto. Puedes entrar." : "Datos invalidos. Intenta de nuevo.";
}
?>