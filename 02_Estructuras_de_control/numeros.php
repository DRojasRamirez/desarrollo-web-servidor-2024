<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <?php
    
        $numero = 2;

        /*if($numero > 0){
            echo "<p> 1 El numero $numero es mayor que cero </p>";
        }

        if($numero > 0) echo "<p> 2 El numero $numero es mayor que cero </p>";

        if ($numero > 0):
            echo "<p> 3 El numero $numero es mayor que cero </p>";
        endif;    */
    
        $numero = -3;

        /*if($numero > 0){
            echo "<p> 1 El numero $numero es mayor que cero </p>";
        } else {
            echo "<p> 1 El numero $numero es menor que cero </p>";
        }

        if($numero > 0) echo "<p> 2 El numero $numero es mayor que cero </p>";
        else echo "<p> 2 El numero $numero es menor que cero </p>";

        if ($numero > 0):
            echo "<p> 3 El numero $numero es mayor que cero </p>";
        else:
            echo "<p> 3 El numero $numero es menor que cero </p>";
        endif;*/

        $numero = 0;

        if($numero > 0){
            echo "<p> 1 El numero $numero es mayor que cero </p>";
        } elseif ($numero == 0) {
            echo "<p> 1 El numero $numero es cero </p>";
        } else {
            echo "<p> 1 El numero $numero es menor que cero </p>";
        }

        if($numero > 0) echo "<p> 2 El numero $numero es mayor que cero </p>";
        elseif ($numero == 0)  echo "<p> 2 El numero $numero es cero </p>";
        else echo "<p> 2 El numero $numero es menor que cero </p>";

        if ($numero > 0):
            echo "<p> 3 El numero $numero es mayor que cero </p>";
        elseif ($numero == 0):
            echo "<p> 3 El numero $numero es cero </p>";
        else:
            echo "<p> 3 El numero $numero es menor que cero </p>";
        endif;

    ?>

    <?php
    # Rangos [-10,0), [10,20], (10,20]

    $num = -7;

    // and o && para la conjuncion

    if($num >= -10 && $num < 0){
        echo "<p> El numero $num esta en el rango [-10,0)</p>";
    } elseif ($num >= 0 && $num <= 10){
        echo "<p> El numero $num esta en el rango [0,10]</p>";
    } elseif ($num > 10 && $num <= 20){
        echo "<p> El numero $num esta en el rango (10,20]</p>";
    } else {
        echo "<p> El numero $num no esta en el rango</p>";
    }
    ?>


</body>
</html>