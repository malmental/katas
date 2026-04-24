<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Enum\TipoTramite;
use App\Service\MaquinaTurnos;
use App\Exception\TurnoNoEcontradoException;

$totem = new MaquinaTurnos();

echo "Bienvenido al totem de turnos" . PHP_EOL;
echo "C: Cita previa" . PHP_EOL;
echo "E: Envíos" . PHP_EOL;
echo "R: Recogida" . PHP_EOL;
echo "O: Otros" . PHP_EOL;
echo "I: Información" . PHP_EOL;
echo "D: Salir" . PHP_EOL;

while (true) {
    echo "Turno actual: ";
    $cola = $totem->verCola();
    if (empty($cola)) {
        echo "vacía" . PHP_EOL;
    } else {
        foreach ($cola as $ticket) {
            echo $ticket->getCodigoCompleto() . " ";
        }
        echo PHP_EOL;
    }

    echo "Escoja su opción (C/E/R/O/I)";
    echo "o D para salir: ";
    $input = trim(fgets(STDIN));

    if (strtoupper($input) === 'D') {
        echo "Muchas gracias y hasta pronto !" . PHP_EOL;
        break;
    }

    $tipoMap = [
        'C' => TipoTramite::C,
        'E' => TipoTramite::E,
        'R' => TipoTramite::R,
        'O' => TipoTramite::O,
        'I' => TipoTramite::I,
    ];

    if (!isset($tipoMap[strtoupper($input)])) {
        echo "Opcion no válida !" . PHP_EOL;
        continue;
    }

    $tipo = $tipoMap[strtoupper($input)];
    echo "Ticket procesado: " . $totem->generarTicket($tipo)->getCodigoCompleto() . PHP_EOL;
}
