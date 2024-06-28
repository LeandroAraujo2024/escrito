<?php

function listarDestinosPorPais($pais) {
    // Lista de destinos
    $destinos = [
        [
            'nombre' => 'Playa del Carmen',
            'pais' => 'México',
            'precio' => 1500,
            'duracion' => '7 días'
        ],
        [
            'nombre' => 'Cancún',
            'pais' => 'México',
            'precio' => 2000,
            'duracion' => '7 días'
        ],
        [
            'nombre' => 'Buenos Aires',
            'pais' => 'Argentina',
            'precio' => 1200,
            'duracion' => '5 días'
        ],
        [
            'nombre' => 'Bariloche',
            'pais' => 'Argentina',
            'precio' => 1800,
            'duracion' => '6 días'
        ],
        [
            'nombre' => 'Paris',
            'pais' => 'Francia',
            'precio' => 2500,
            'duracion' => '7 días'
        ]
    ];

    $destinosPorPais = array_filter($destinos, function($destino) use ($pais) {
        return $destino['pais'] === $pais;
    });

    $resultado = array_values($destinosPorPais);

    return $resultado;
}


