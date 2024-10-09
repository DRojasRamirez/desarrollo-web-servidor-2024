<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>

    <form action="" method="post">

        <h1>Calculadora de Potencias</h1>

        <label for="base">Base</label>
        <input type="text" name="base" id="base">

        <br><br>
        <label for="expo">Exponente</label>
        <input type="text" name="expo" id="expo">

        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

    /**
     * Crear un formulario que reciba dos parametros. Base y exponente
     * Cuando se envie el formulario se calculara el resultado de elevar la base al exponente
     */

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        /**
         * Este codigo se ejecuta cuando el servidor recibe una peticion POST
         */

        $base = $_POST["base"];
        $expo = $_POST["expo"];
        $resultado = 1;

        // Añadir al formulario un campo de texto adicional para introducir un numero
        // Mostrar el mensaje tantas veces como indique el numero
        
        for($i = 0; $i < $expo; $i++){      
            $resultado = $base * $resultado;                
        }
        echo "<h1>$base elevado a $expo es igual a $resultado</h1>";

    }

    
    
    
    ?>
</body>
</html>