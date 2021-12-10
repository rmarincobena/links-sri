<?php

namespace App\Models;

class Destinatario
{
    public string $identificacionDestinatario;
    public string $razonSocialDestinatario;
    public string $dirDestinatario;
    public string $motivoTraslado;
    public string $docAduaneroUnico;
    public string $codEstabDestino;
    public string $ruta;
    public string $codDocSustento;
    public string $numDocSustento;
    public string $numAutDocSustento;
    public string $fechaEmisionDocSustento;
    public DetalleGuiaRemision $detalles;
}
