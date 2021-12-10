<?php

namespace SRI\Models;

class ConfiguracionCorreo
{
    public string $correoAsunto;
    public string $correoHost;
    public string $correoPass;
    public string $correoPort;
    public string $correoRemitente;
    public bool $sslHabilitado;

    public function __construct()
    {
    }
}
