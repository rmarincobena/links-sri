<?php

namespace SRI\Models;

class Retencion extends ComprobanteGeneral
{
    public string $tipoIdentificacionSujetoRetenido;
    public string $razonSocialSujetoRetenido;
    public string $identificacionSujetoRetenido;
    public string $periodoFiscal;
    public ImpuestoRetencion $impuestos;
    public DetallesAdicionales $infoAdicional;
}
