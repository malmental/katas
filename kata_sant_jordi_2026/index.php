<?php

$libros = [
    "El Principito",
    "Alicia en el País de les Maravillas",
    "El libro de la Selva",
    "Peter Pan",
    "El Mago de Oz"
];

$rosas = [
    "Rosa Roja",
    "Rosa Blanca",
    "Rosa Amarilla",
    "Rosa Rosa",
    "Rosa Azul"
];

function inputUsuario($pregunta) {
    echo $pregunta;
    return trim(fgets(STDIN));
}

// Inciar el programa: en la terminal php index.php:
echo "Que vas a regalar para Sant Jordi?" . PHP_EOL;
echo "1. Libro" . PHP_EOL;
echo "2. Rosa" . PHP_EOL;

$opcion = inputUsuario("Escoge 1 o 2: ");

if ($opcion == '1') {
    $regalo = $libros[array_rand($libros)];
    echo "Haz escogido un libro: " . $regalo . PHP_EOL;
} elseif ($opcion == '2') {
    $regalo = $rosas[array_rand($rosas)];
    echo "Haz escogido una rosa: " . $regalo . PHP_EOL;
} else {
    echo "Solo marca 1 o 2, por favor." . PHP_EOL;
}
