<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>

    <!-- Ejercicio 1: Calcular la suma de todos los numeros pares del 1 al 20-->

    <?php

    $i = 0;
    $suma = null;
    
    while($i <= 20){
        $suma = $suma + $i;
        $i = $i+2;
    }
    
    echo "<h3>La suma da $suma</h3>";
    
    
    ?>




    <!-- Ejercicio 2: Mostrar la fecha actual con el siguiente formato:
        Viernes 27 de Septiembre de 2024
        Utilizar las estructuras de control necesarias -->

        <?php
        
        $dia = date("j");

        $dia_semana = date("l");

		$dia_semana_espanol = null;

		$dia_semana_espanol = match ($dia_semana) {
			"Monday" => "Lunes",
			"Tuesday" => "Martes",
			"Wednesday" => "Miercoles",
			"Thursday" => "Jueves",
			"Friday" => "Viernes",
			"Saturday" => "Sabado",
			"Sunday" => "Domingo"
		};

        $mes = date("F");

        $mes_espanol = null;

        $mes_espanol = match ($mes) {
            "January" => "Enero",
			"February" => "Febrero",
			"March" => "Marzo",
			"April" => "Abril",
			"May" => "Mayo",
			"June" => "Junio",
			"July" => "Julio",
            "August" => "Agosto",
			"September" => "Septiembre",
			"October" => "Octubre",
			"November" => "Noviembre",
			"December" => "Diciembre"
        };

        $anio = date("Y");

        echo "<h1>$dia_semana_espanol $dia de $mes_espanol de $anio"
        
        ?>

    <!-- Ejercicio 3: Mostrar en una lista los números múltiplos de 3 usando WHile y IF-->

    <!-- Ejercicio 4: calcular el factorial de 6 usando While-->
    
</body>
</html>