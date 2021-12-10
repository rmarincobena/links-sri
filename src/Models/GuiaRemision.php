<?php

namespace SRI\Models;

class GuiaRemision extends ComprobanteGeneral
{
    public string $dirPartida;
    public string $razonSocialTransportista;
    public string $tipoIdentificacionTransportista;
    public string $rucTransportista;
    public string $rise;
    public string $fechaFinTransporte;
    public string $fechaIniTransporte;
    public string $placa;
    public DetallesAdicionales $infoAdicional;
    public Destinatario $destinatarios;
}
