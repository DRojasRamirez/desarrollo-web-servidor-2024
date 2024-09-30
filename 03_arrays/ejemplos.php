<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>
</head>
<body>
    
    <?php
    /*
    Todos los arrays en PHP son asociativos como los MAP de Java

    Tienes pares CLAVE-VALOR
    
    */

    $numeros = [5, 10, 9, 6, 7, 4];
    $numeros = array(6, 10, 9, 4, 3);
    print_r($numeros); //PRINT RELATIONAL

    echo "<br></br>";
    $animales = ["Perro", "Gato", "Ornitorrinco", "Suricato", "Capibara", "Dragon de Komodo"];
    $animales = [
        "A01" => "Perro",
        "A02" => "Gato",
        "A03" => "Ornitorrinco",
        "A04" => "Suricato",
        "A05" => "Capibara",
        "A06" => "Dragon de Komodo",
    ];
    //print_r($animales);

    echo "<p>" . $animales["A03"] . "<p>";

    ?>
</body>
</html>