<?php

namespace App\Models;

class ReenvioMailParam
{
    public ConfiguracionCorreo $configCorreo;
    public string $dirDocAutorizados;
    public string $identificacionComprador;
    public string $nombreArchivo;
    public string $otrosDestinatarios;
}
