<?php

namespace SRI\Models;

class ComprobantePendiente
{
    public string $ambiente;
    public string $codDoc;
    public /* Configuracion */ $configAplicacion;
    public /* ConfiguracionCorreo */ $configCorreo;
    public string $establecimiento;
    public string $fechaEmision;
    public string $ptoEmision;
    public string $ruc;
    public string $secuencial;
    public string $tipoEmision;
    public string $clavAcc;
}
