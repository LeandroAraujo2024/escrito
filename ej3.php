<?php

function calcularPrecioConDescuento($destino, $porcentajeDescuento) {
    // Lista de destinos y sus precios
    $preciosDestinos = [
        "Madrid" => 1000,
        "Barcelona" => 900,
        "Valencia" => 800,
        "Sevilla" => 850,
        "Bilbao" => 950
    ];
    
    // Verificar si el destino existe en la lista
    if (!array_key_exists($destino, $preciosDestinos)) {
        return "El destino no se encuentra disponible.";
    }
    
    // Obtener el precio del destino
    $precioOriginal = $preciosDestinos[$destino];
    
    // Calcular el precio con descuento
    $precioConDescuento = $precioOriginal - ($precioOriginal * ($porcentajeDescuento / 100));
    
    return $precioConDescuento;
}


