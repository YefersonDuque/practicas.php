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
    $edad=$_POST["edad_usuario"];
    if($edad<18){
        echo "Eres menor de edad.";
    }
    else if($edad>17 && $edad<=40){
        echo "Eres mayor de edad y joven.";
    }
    else if($edad>40 && $edad<=80){
        echo "Ya no eres tan joven.";
    }
    elseif($edad>80){
        echo "Ya estás muy viejo. Cuídate.";
    }
}

?>