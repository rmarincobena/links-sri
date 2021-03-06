<?php

namespace SRI\Models;

class NotaCredito extends ComprobanteGeneral
{
    public string $codDocModificado;
    public /* DetallesNotaCredito */ $detalles;
    public string $fechaEmisionDocSustento;
    public string $identificacionComprador;
    public /* DetallesAdicionales */ $infoAdicional;
    public string $moneda;
    public string $motivo;
    public string $numDocModificado;
    public string $razonSocialComprador;
    public string $rise;
    public string $tipoIdentificacionComprador;
    public /* Impuestos */ $totalConImpuesto;
    public string $totalSinImpuestos;
    public string $valorModificacion;
}
