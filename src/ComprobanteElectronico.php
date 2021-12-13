<?php

namespace SRI;

use SoapClient;

use SRI\Models\ReenvioMail;
use SRI\Models\ProcesarXML;
use SRI\Models\GenerarXMLPDF;
use SRI\Models\ProcesarProforma;
use SRI\Models\ProcesarComprobante;
use SRI\Models\ProcesarXMLRespuesta;
use SRI\Models\GenerarXMLPDFRespuesta;
use SRI\Models\ProcesarComprobanteLote;
use SRI\Models\ProcesarComprobantePendiente;
use SRI\Models\ProcesarComprobanteRespuesta;
use SRI\Models\ProcesarComprobanteLoteRespuesta;
use SRI\Models\ProcesarComprobantePendienteRespuesta;

class ComprobanteElectronico extends SoapClient
{
    /* private static $classmap = array(
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
    ); */

    private static $classmap = array(
        'factura' => 'factura',
        'proforma' => 'proforma',
        'liquidacionCompra' => 'liquidacionCompra',
        'comprobanteGeneral' => 'comprobanteGeneral',
        'detalleFactura' => 'detalleFactura',
        'detalleProforma' => 'detalleProforma',
        'detalleLiquidacionCompra' => 'detalleLiquidacionCompra',
        'detalleAdicional' => 'detalleAdicional',
        'impuesto' => 'impuesto',
        'campoAdicional' => 'campoAdicional',
        'totalImpuesto' => 'totalImpuesto',
        'configAplicacion' => 'configAplicacion',
        'configCorreo' => 'configCorreo',
        'guiaRemision' => 'guiaRemision',
        'destinatario' => 'destinatario',
        'detalleGuiaRemision' => 'detalleGuiaRemision',
        'comprobanteRetencion' => 'comprobanteRetencion',
        'impuestoComprobanteRetencion' => 'impuestoComprobanteRetencion',
        'notaDebito' => 'notaDebito',
        'motivo' => 'motivo',
        'pagos' => 'pagos',
        'notaCredito' => 'notaCredito',
        'detalleNotaCredito' => 'detalleNotaCredito',
        'comprobantePendiente' => 'comprobantePendiente',
        'mensajeGenerado' => 'mensajeGenerado',
        'respuesta' => 'respuesta',
        'procesarComprobantePendiente' => 'procesarComprobantePendiente',
        'procesarComprobantePendienteResponse' => 'procesarComprobantePendienteResponse',
        'procesarComprobante' => 'procesarComprobante',
        'procesarComprobanteResponse' => 'procesarComprobanteResponse',
        'generarXMLPDF' => 'generarXMLPDF',
        'generarXMLPDFResponse' => 'generarXMLPDFResponse',
        'procesarXML' => 'procesarXML',
        'procesarXMLResponse' => 'procesarXMLResponse',
        'reenvioEmailParam' => 'reenvioEmailParam',
        'reenviarEmail' => 'reenviarEmail',
        'reenviarEmailResponse' => 'reenviarEmailResponse',
        'procesarComprobanteLote' => 'procesarComprobanteLote',
        'comprobanteLote' => 'comprobanteLote',
        'respuestaComprobanteLote' => 'respuestaComprobanteLote',
        'respuestaComprobanteConsultado' => 'respuestaComprobanteConsultado',
        'obtenerComprobante' => 'obtenerComprobante',
        'obtenerComprobanteResponse' => 'obtenerComprobanteResponse',
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

    /**
     *
     * @param procesarComprobante $parameters
     * @return ProcesarComprobanteRespuesta
     */
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

    /**
     *
     * @param procesarComprobantePendiente $parameters
     * @return ProcesarComprobantePendienteRespuesta
     */
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

    /**
     *
     * @param ProcesarXML $parameters
     * @return ProcesarXMLRespuesta
     */
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

    /**
     *
     * @param GenerarXMLPDF $parameters
     * @return GenerarXMLPDFRespuesta
     */
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

    /**
     *
     * @param ProcesarProforma $parameters
     * @return ProcesarXMLRespuesta
     */
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

    /**
     *
     * @param ReenvioMail $parameters
     * @return ProcesarComprobanteRespuesta
     */
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

    /**
     *  
     *
     * @param ProcesarComprobanteLote $parameters
     * @return ProcesarComprobanteLoteRespuesta
     */
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
