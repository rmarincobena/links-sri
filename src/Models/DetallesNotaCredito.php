<?php

namespace SRI\Models;

class DetallesNotaCredito
{
    public string $codigoInterno;
    public string $codigoAdicional;
    public string $descripcion;
    public string $cantidad;
    public string $precioUnitario;
    public string $descuento;
    public string $precioTotalSinImpuesto;
    public DetallesAdicionales $detallesAdicionales;
    public Impuestos $impuestos;
}
