<?php

namespace SRI\Models;

class DetallesNotaCredito
{
    public $codigoInterno;
    public $codigoAdicional;
    public $descripcion;
    public $cantidad;
    public $precioUnitario;
    public $descuento;
    public $precioTotalSinImpuesto;
    public /* DetallesAdicionales */ $detallesAdicionales;
    public /* Impuestos */ $impuestos;
}
