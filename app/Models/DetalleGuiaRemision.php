<?php

namespace App\Models;

class DetalleGuiaRemision
{
    public string $cantidad;
    public string $codigoAdicional;
    public string $codigoInterno;
    public string $descripcion;
    public DetallesAdicionales $detallesAdicionales;
}
