<?php

namespace SRI\Models;

class Proforma
{
    public /* ConfiguracionCorreo */ $configCorreo;
    public string $dirLogo;
    public string $dirProformas;
    public string $tipoEmision;
    public string $razonSocial;
    public string $nombreComercial;
    public string $ruc;
    public string $numero;
    public string $dirMatriz;
    public string $dirEstablecimiento;
    public string $fechaEmision;
    public string $razonSocialComprador;
    public string $identificacionComprador;
    public string $direccionComprador;
    public string $subTotal12;
    public string $subTotal0;
    public string $subTotalSinImpuesto;
    public string $iva;
    public string $totalDescuento;
    public string $importeTotal;
    public /* DetallesProforma */ $detalles;
    public /* DetallesAdicionales */ $infoAdicional;
}
