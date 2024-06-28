<?php
function obtenerDestinos() {
    $destinos = [
        [
            "destino" => "París",
            "país" => "Francia",
            "precio" => 1200,
            "duración" => 5
        ],
        [
            "destino" => "Tokio",
            "país" => "Japón",
            "precio" => 1500,
            "duración" => 7
        ],
        [
            "destino" => "Nueva York",
            "país" => "Estados Unidos",
            "precio" => 1000,
            "duración" => 4
        ],
        [
            "destino" => "Sídney",
            "país" => "Australia",
            "precio" => 2000,
            "duración" => 10
        ],
        [
            "destino" => "Roma",
            "país" => "Italia",
            "precio" => 900,
            "duración" => 6
        ]
    ];
    return $destinos;
}

// Llamar a la función y mostrar los destinos
$destinos = obtenerDestinos();
foreach ($destinos as $destino) {
    echo "Destino: " . $destino["destino"] . ", País: " . $destino["país"] . ", Precio: $" . $destino["precio"] . ", Duración: " . $destino["duración"] . " días\n";
}
?>
