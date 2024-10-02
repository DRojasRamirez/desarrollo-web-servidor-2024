<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Tablas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <!-- EJERCICIO 1

        Desarrollo web en entorno servidor => Alejandra,
        Desarrollo web en entorno cliente => Jose Miguel,
        Diseño en interfaces web => Jose Miguel,
        Despliegue de aplicaciones => Jaime,
        Empresa e iniciativa emprendedora => Andrea,
        Inglés => Virginia,

        Mostrarlo todo en una Tabla

    -->

    <h2>Ejercicio 1</h2>
    <?php

    $profesores = [
        "Desarrollo web en entorno servidor" => "Alejandra",
        "Desarrollo web en entorno cliente" => "Jose Miguel",
        "Diseño en interfaces web" => "Jose Miguel",
        "Despliegue de aplicaciones" => "Jaime",
        "Empresa e iniciativa emprendedora" => "Andrea",
        "Inglés" => "Virginia",
    ];
    ?>

    <table>
        <caption>Medac 2ºB DAW</caption>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor/a</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($profesores as $asignatura => $docente){ ?>
                    <tr>
                        <td><?php echo $asignatura ?></td>
                        <td><?php echo $docente ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>



    <!-- EJERCICIO 2   
        Francisco => 3,
        Daniel => 5,
        Aurora => 10,
        Luis => 7,
        Samuel => 9,

        MOSTRAR EN UNA TABLA CON 3 COLUMNAS
            - COLUMNA 1: ALUMNO
            - COLUMNA 2: NOTA
            - COLUMNA 3: SI NOTA < 5, SUSPENSO, ELSE, APROBADO 
    -->

    <h2>Ejercicio 2</h2>

    <?php

    $alumnos = [
        "Francisco" => 3,
        "Daniel" => 5,
        "Aurora" => 10,
        "Luis" => 7,
        "Samuel" => 9,
    ];
    ?>

    <table>
        <caption>Medac 2ºB DAW</caption>
        <thead>
            <tr>
                <th>Alumno/a</th>
                <th>Nota</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($alumnos as $alumno => $nota){ ?>
                    <tr>
                        <td><?php echo $alumno ?></td>
                        <td><?php echo $nota ?></td>
                        <?php
                            if($nota >= 5){ ?>
                               <td class="pass"><?php echo "Aprobado"; ?></td> <?php
                            } else {
                               ?> <td class="notPass"><?php echo "Suspenso"; ?></td><?php
                            }
                            ?>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    
</body>
</html>