<?php

namespace SRI\Models;

class ComprobanteGeneral
{
    /* Informacion Tributaria */
    public string $ambiente;
    public string $tipoEmision;
    public string $razonSocial;
    public string $nombreComercial;
    public string $ruc;
    public string $claveAcc;
    public string $codDoc;
    public string $establecimiento;
    public string $ptoEmision;
    public string $secuencial;
    public string $dirMatriz;

    /* Informacion Documento */
    public string $fechaEmision;
    public string $dirEstablecimiento;
    public string $contribuyenteEspecial;
    public string $obligadoContabilidad;

    public string $tipoDoc;

    /* Informacion Seguridad */
    public Configuracion $configAplicacion;
    public ConfiguracionCorreo $configCorreo;
}
