<?php

namespace App\Models;

class ComprobanteConsultadoRespuesta
{
    public string $estadoComprobante;
    public string $claveAcceso;
    public MensajeGenerado $mensajes;
    public $fechaAutorizacion;
    public string $comprobante;
}
