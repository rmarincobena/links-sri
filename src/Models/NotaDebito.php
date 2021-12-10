<?php

namespace SRI\Models;

class NotaDebito extends ComprobanteGeneral
{
    public string $tipoIdentificacionComprador;
    public string $razonSocialComprador;
    public string $identificacionComprador;
    public string $codDocModificado;
    public string $numDocModificado;
    public string $fechaEmisionDocSustento;
    public string $totalSinImpuestos;
    public Impuestos $impuestos;
    public Motivos $motivos;
    public DetallesAdicionales $infoAdicional;
    public string $rise;
    public string $valorTotal;
}
