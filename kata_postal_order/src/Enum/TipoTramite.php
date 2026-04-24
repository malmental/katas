<?php

namespace App\Enum;

enum TipoTramite: string
{
    case C = "Cita previa";
    case E = "Envio";
    case R = "Recogida";
    case O = "Otros trámites";
    case I = "Información";

    public function getCodigo(): string
    {
        return $this->name;
    }
}
