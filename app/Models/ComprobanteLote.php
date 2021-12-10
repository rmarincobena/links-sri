<?php

namespace App\Models;

class ComprobanteLote
{
    public string $ambiente;
    public string $claveAcceso;
    public string $codDoc;
    public ComprobanteGeneral $comprobantes;
    public Configuracion $configAplicacion;
    public ConfiguracionCorreo $configCorreo;
    public string $establecimiento;
    public string $fechaEmision;
    public string $idUnico;
    public string $ptoEmision;
    public string $ruc;
    public string $secuencial;
    public string $tipoEmision;
}
