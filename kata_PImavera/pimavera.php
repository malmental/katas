<?php

$pi = "14159265358979323846264338327950288419716939937510";
$digitosMostrados = 2; 

echo "Bienvenido al programa PImavera" . PHP_EOL;
echo "El valor inicial es 3.14" . PHP_EOL;

while (true) {
    echo "A y la tecla enter para añadir un decimal de PI" . PHP_EOL;
    echo "Q y la tecla enter para salir" . PHP_EOL;

    $input = trim(fgets(STDIN));

    if ($input == 'A' || $input == 'a') {
        $digitosMostrados++;
        echo "El numero pi es: 3." . substr($pi, 0, $digitosMostrados) . PHP_EOL;
    } elseif ($input == 'Q' || $input == 'q') {
        echo "Saliendo" . PHP_EOL;
        break;
    } else {
        echo "Caracter no valido, utilice A o Q" . PHP_EOL;
    }
}

