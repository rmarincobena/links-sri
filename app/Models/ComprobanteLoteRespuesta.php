<?php

namespace App\Models;

class ComprobanteLoteRespuesta
{
    public string $claveAccesoConsultada;
    public bool $error;
    public MensajeGenerado $mensajeGeneral;
    public Respuesta $respuestas;
}
