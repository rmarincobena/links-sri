<?php

namespace SRI\Models;

class DetallesGuiaRemision
{
    public string $cantidad;
    public string $codigoAdicional;
    public string $codigoInterno;
    public string $descripcion;
    public /* DetallesAdicionales */ $detallesAdicionales;
}
