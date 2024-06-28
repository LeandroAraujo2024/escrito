<?php
function buscarDestinoPorNombre($nombreDestino) {
    $destinos = [
        [
            'nombre' => 'París',
            'país' => 'Francia',
            'precio' => 1200,
            'duración' => '7 días'
        ],
        [
            'nombre' => 'Nueva York',
            'país' => 'Estados Unidos',
            'precio' => 1500,
            'duración' => '5 días'
        ],
        [
            'nombre' => 'Tokio',
            'país' => 'Japón',
            'precio' => 1800,
            'duración' => '10 días'
        ]
    ];

    // Buscar el destino por nombre
    foreach ($destinos as $destino) {
        if (strtolower($destino['nombre']) === strtolower($nombreDestino)) {
            return $destino;
        }
    }

    // Si el destino no se encuentra
    return "Destino no encontrado";
}

