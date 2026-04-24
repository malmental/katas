<?php

namespace App\Model;

use App\Enum\TipoTramite;

class Ticket
{
    public function __construct(
        private TipoTramite $tipo,
        private int $numero
    ) {}

    public function getTipo(): TipoTramite
    {
        return $this->tipo;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getCodigoCompleto(): string
    {
        return $this->tipo->getCodigo() . str_pad($this->numero, 3, "0", STR_PAD_LEFT);
    }
}
