<?php

namespace SRI\Models;

class ComprobanteLoteRespuesta
{
    public string $claveAccesoConsultada;
    public bool $error;
    public MensajeGenerado $mensajeGeneral;
    public Respuesta $respuestas;
}
