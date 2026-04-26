<?php

namespace App\Service;

use App\Enum\TipoTramite;
use App\Model\Ticket;
use App\Exception\TurnoNoEncontradoException;

class MaquinaTurnos
{
    private array $contadores = [
        'C' => 1,
        'E' => 1,
        'R' => 1,
        'O' => 1,
        'I' => 1
    ];

    private array $ticketsPendientes = [];

    public function generarTicket(TipoTramite $tipo): Ticket
    {
        $numero = $this->contadores[$tipo->name];
        $ticket = new Ticket($tipo, $numero);
        $this->ticketsPendientes[] = $ticket;
        $this->contadores[$tipo->name]++;

        return $ticket;
    }

    public function llamarSiguienteTurno(TipoTramite $tipo): Ticket
    {
        foreach ($this->ticketsPendientes as $posicion => $ticket) {
            if ($ticket->getTipo() === $tipo) {
                unset($this->ticketsPendientes[$posicion]);
                $this->ticketsPendientes = array_values($this->ticketsPendientes);
                return $ticket;
            }
        }

        throw new TurnoNoEncontradoException($tipo);
    }

    public function verCola(): array
    {
        return $this->ticketsPendientes;
    }
}
