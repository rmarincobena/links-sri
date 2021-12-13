<?php

namespace SRI;

use SoapClient;
use SRI\Models\Pagos;
use SRI\Models\Motivos;
use SRI\Models\Factura;
use SRI\Models\Proforma;
use SRI\Models\Impuestos;
use SRI\Models\Retencion;
use SRI\Models\Respuesta;
use SRI\Models\NotaDebito;
use SRI\Models\NotaCredito;
use SRI\Models\ReenvioMail;
use SRI\Models\ProcesarXML;
use SRI\Models\GuiaRemision;
use SRI\Models\Destinatario;
use SRI\Models\GenerarXMLPDF;
use SRI\Models\Configuracion;
use SRI\Models\MensajeGenerado;
use SRI\Models\ComprobanteLote;
use SRI\Models\DetallesFactura;
use SRI\Models\ProcesarProforma;
use SRI\Models\ReenvioMailParam;
use SRI\Models\DetallesProforma;
use SRI\Models\LiquidacionCompra;
use SRI\Models\ImpuestoRetencion;
use SRI\Models\ComprobanteGeneral;
use SRI\Models\ObtenerComprobante;
use SRI\Models\DetallesNotaCredito;
use SRI\Models\ConfiguracionCorreo;
use SRI\Models\ProcesarComprobante;
use SRI\Models\DetallesAdicionales;
use SRI\Models\ComprobantePendiente;
use SRI\Models\DetallesGuiaRemision;
use SRI\Models\ProcesarXMLRespuesta;
use SRI\Models\ReenvioMailRespuesta;
use SRI\Models\GenerarXMLPDFRespuesta;
use SRI\Models\ProcesarComprobanteLote;
use SRI\Models\ComprobanteLoteRespuesta;
use SRI\Models\DetallesLiquidacionCompra;
use SRI\Models\ObtenerComprobanteRespuesta;
use SRI\Models\ProcesarComprobantePendiente;
use SRI\Models\ProcesarComprobanteRespuesta;
use SRI\Models\ComprobanteConsultadoRespuesta;
use SRI\Models\ProcesarComprobanteLoteRespuesta;
use SRI\Models\ProcesarComprobantePendienteRespuesta;

class ComprobanteElectronico extends SoapClient
{
    private static $classmap = array(
        'factura' => Factura::class,
        'proforma' => Proforma::class,
        'liquidacionCompra' => LiquidacionCompra::class,
        'comprobanteGeneral' => ComprobanteGeneral::class,
        'detalleFactura' => DetallesFactura::class,
        'detalleProforma' => DetallesProforma::class,
        'detalleLiquidacionCompra' => DetallesLiquidacionCompra::class,
        'detalleAdicional' => DetallesAdicionales::class,
        'impuesto' => Impuestos::class,
        'campoAdicional' => DetallesAdicionales::class,
        'totalImpuesto' => Impuestos::class,
        'configAplicacion' => Configuracion::class,
        'configCorreo' => ConfiguracionCorreo::class,
        'guiaRemision' => GuiaRemision::class,
        'destinatario' => Destinatario::class,
        'detalleGuiaRemision' => DetallesGuiaRemision::class,
        'comprobanteRetencion' => Retencion::class,
        'impuestoComprobanteRetencion' => ImpuestoRetencion::class,
        'notaDebito' => NotaDebito::class,
        'motivo' => Motivos::class,
        'pagos' => Pagos::class,
        'notaCredito' => NotaCredito::class,
        'detalleNotaCredito' => DetallesNotaCredito::class,
        'comprobantePendiente' => ComprobantePendiente::class,
        'mensajeGenerado' => MensajeGenerado::class,
        'respuesta' => Respuesta::class,
        'procesarComprobantePendiente' => ProcesarComprobantePendiente::class,
        'procesarComprobantePendienteResponse' => ProcesarComprobantePendienteRespuesta::class,
        'procesarComprobante' => ProcesarComprobante::class,
        'procesarComprobanteResponse' => ProcesarComprobanteRespuesta::class,
        'generarXMLPDF' => GenerarXMLPDF::class,
        'generarXMLPDFResponse' => GenerarXMLPDFRespuesta::class,
        'procesarXML' => ProcesarXML::class,
        'procesarXMLResponse' => ProcesarXMLRespuesta::class,
        'reenvioEmailParam' => ReenvioMailParam::class,
        'reenviarEmail' => ReenvioMail::class,
        'reenviarEmailResponse' => ReenvioMailRespuesta::class,
        'procesarComprobanteLote' => ProcesarComprobanteLote::class,
        'comprobanteLote' => ComprobanteLote::class,
        'respuestaComprobanteLote' => ComprobanteLoteRespuesta::class,
        'respuestaComprobanteConsultado' => ComprobanteConsultadoRespuesta::class,
        'obtenerComprobante' => ObtenerComprobante::class,
        'obtenerComprobanteResponse' => ObtenerComprobanteRespuesta::class,
    );

    /* $wsdl = "http://localhost:8081/MasterOffline/ComprobanteElectronico?wsdl", $options = array() */
    public function __construct($wsdl, $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }

    public function procesarComprobante(ProcesarComprobante $parameters)
    {
        return $this->__soapCall(
            'procesarComprobante',
            array($parameters),
            array(
                'uri'           => 'http://Servicio/',
                'soapaction'    => ''
            )
        );
    }

    public function procesarComprobantePendiente(ProcesarComprobantePendiente $parameters)
    {
        return $this->__soapCall(
            'procesarComprobantePendiente',
            array($parameters),
            array(
                'uri'           => 'http://Servicio/',
                'soapaction'    => ''
            )
        );
    }

    public function procesarXML(ProcesarXML $parameters)
    {
        return $this->__soapCall(
            'procesarXML',
            array($parameters),
            array(
                'uri' => 'http://Servicio/',
                'soapaction' => ''
            )
        );
    }

    public function generarXMLPDF(GenerarXMLPDF $parameters)
    {
        return $this->__soapCall(
            'generarXMLPDF',
            array($parameters),
            array(
                'uri'           => 'http://Servicio/',
                'soapaction'    => ''
            )
        );
    }

    public function procesarProforma(ProcesarProforma $parameters)
    {
        return $this->__soapCall(
            'procesarProforma',
            array($parameters),
            array(
                'uri'           => 'http://Servicio/',
                'soapaction'    => ''
            )
        );
    }

    public function reenviarEmail(ReenvioMail $parameters)
    {
        return $this->__soapCall(
            'reenviarEmail',
            array($parameters),
            array(
                'uri'        => 'http://Servicio/',
                'soapaction' => ''
            )
        );
    }

    /* $wsdl = "http://localhost:8001/MasterOffline/ProcesarComprobanteElectronico?wsdl", $options = array() */
    public function ProcesarComprobanteElectronico($wsdl, $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }

    public function procesarComprobanteLote(ProcesarComprobanteLote $parameters)
    {
        return $this->__soapCall(
            'procesarComprobanteLote',
            array($parameters),
            array(
                'uri' => 'http://Servicio/',
                'soapaction' => ''
            )
        );
    }
}
