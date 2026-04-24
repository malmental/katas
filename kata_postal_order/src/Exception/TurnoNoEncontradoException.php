<?php

namespace App\Exception;

use App\Enum\TipoTramite;

class TurnoNoEncontradoException extends \Exception
{
    public function __construct(TipoTramite $tipo)
    {
        parent::__construct("No hay nadie esperando para: " . $tipo->value);
    }
}
