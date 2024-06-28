<?php
function encontrarViajeMasBarato($viajes) {
    //verifica que la lista de viajes no este vacia
    if (empty($viajes)) {
        return null;
    }

    //inicia el viaje mas barato con el priner elemento de la lista
    $viajeMasBarato = $viajes[0];

    //recorre la lista de viajes para encontrar el más barato
    foreach ($viajes as $viaje) {
        if ($viaje['precio'] < $viajeMasBarato['precio']) {
            $viajeMasBarato = $viaje;
        }
    }

    return $viajeMasBarato;
}

