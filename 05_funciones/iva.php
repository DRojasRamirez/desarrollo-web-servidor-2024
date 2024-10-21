<?php
DEFINE("GENERAL" , 1.21);
DEFINE("REDUCIDO" , 1.1);
DEFINE("SUPERREDUCIDO" , 1.04);

function calcularIVA($iva, $precio){
    $pvp = match ($iva) {
        "general" => $precio * GENERAL,
        "reducido" => $precio * REDUCIDO,
        "superreducido" => $precio * SUPERREDUCIDO,
        default => "ERROR"
    };
    
    echo "<h3>El total aplicando el IVA es " . $pvp . "€</h3>";
}


?>