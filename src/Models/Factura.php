<?php

namespace SRI\Models;

class Factura extends ComprobanteGeneral
{
    public string $tipoIdentificacionComprador;
    public string $guiaRemision;
    public string $razonSocialComprador;
    public string $identificacionComprador;
    public string $direccionComprador;
    public string $totalSinImpuestos;
    public string $totalDescuento;

    public /* Impuestos */ $totalConImpuesto;

    public string $propina;
    public string $importeTotal;
    public string $moneda;

    public /* Pagos */ $pagos;

    public /* DetallesFactura */ $detalles;
    public /* DetallesAdicionales */ $infoAdicional;

    public string $regimenMicroempresas;
    public string $agenteRetencion;
}
