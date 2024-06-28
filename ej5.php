<?php
function calcularPromedioDuracion($viajes) {
    // Verificar si la lista de viajes está vacía
    if (empty($viajes)) {
        return 0;
    }
    
    $totalDuracion = 0;
    $numViajes = count($viajes);

    // Sumar la duración dde cada viaje
    foreach ($viajes as $viaje) {
        if (isset($viaje['duracion'])) {
            $totalDuracion += $viaje['duracion'];
        }
    }
    
    // Calcular promedio
    $promedio = $totalDuracion / $numViajes;
    return $promedio;
}

$viajes = [
    ["duracion" => 5],
    ["duracion" => 3],
    ["duracion" => 8],
];

echo calcularPromedioDuracion($viajes); 
