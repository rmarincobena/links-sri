<?php

namespace SRI\Models;

class DetallesFactura
{
    public $codigoPrincipal;
    public $codigoAuxiliar;
    public $descripcion;
    public $cantidad;
    public $precioUnitario;
    public $descuento;
    public $precioTotalSinImpuesto;
    public /* DetallesAdicionales */ $detalleAdicional;
    public /* Impuestos */ $impuestos;
}
