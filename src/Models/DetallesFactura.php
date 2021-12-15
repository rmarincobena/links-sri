<?php

namespace SRI\Models;

class DetallesFactura
{
    public string $codigoPrincipal;
    public string $codigoAuxiliar;
    public string $descripcion;
    public string $cantidad;
    public string $precioUnitario;
    public string $descuento;
    public string $precioTotalSinImpuesto;
    public /* DetallesAdicionales */ $detalleAdicional;
    public /* Impuestos */ $impuestos;
}
