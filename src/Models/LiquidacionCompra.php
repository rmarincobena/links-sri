<?php

namespace SRI\Models;

class LiquidacionCompra extends ComprobanteGeneral
{
    public string $tipoIdentificacionProveedor;
    public string $razonSocialProveedor;
    public string $identificacionProveedor;
    public string $direccionProveedor;
    public string $totalSinImpuestos;
    public string $totalDescuento;
    public DetallesLiquidacionCompra $detalles;
    public Impuestos $totalConImpuesto;
    public string $importeTotal;
    public string $moneda;
    public Pagos $pagos;
    public DetallesAdicionales $infoAdicional;
}
