<?php

namespace SRI\Models;

class Respuesta
{
    public string $claveAcceso;
    public string $comprobanteID;
    public string $estadoComprobante;
    public MensajeGenerado $mensajes;
    public string $numeroAutorizacion;
    public $fechaAutorizacion;
}
