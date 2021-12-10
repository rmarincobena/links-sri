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
    private static $classmap = array(
        'factura' => '\SRI\Models\Factura',
        'proforma' => '\SRI\Models\Proforma',
        'liquidacionCompra' => '\SRI\Models\LiquidacionCompra',
        'comprobanteGeneral' => '\SRI\Models\ComprobanteGeneral',
        'detalleFactura' => '\SRI\Models\DetallesFactura',
        'detalleProforma' => '\SRI\Models\DetallesProforma',
        'detalleLiquidacionCompra' => '\SRI\Models\DetallesLiquidacionCompra',
        'detalleAdicional' => '\SRI\Models\DetallesAdicionales',
        'impuesto' => '\SRI\Models\Impuestos',
        'campoAdicional' => '\SRI\Models\DetallesAdicionales',
        'totalImpuesto' => '\SRI\Models\Impuestos',
        'configAplicacion' => '\SRI\Models\Configuracion',
        'configCorreo' => '\SRI\Models\ConfiguracionCorreo',
        'guiaRemision' => '\SRI\Models\GuiaRemision',
        'destinatario' => '\SRI\Models\Destinatario',
        'detalleGuiaRemision' => 'detalleGuiaRemision',
        'comprobanteRetencion' => '\SRI\Models\Retencion',
        'impuestoComprobanteRetencion' => '\SRI\Models\ImpuestoRetencion',
        'notaDebito' => '\SRI\Models\NotaDebito',
        'motivo' => '\SRI\Models\Motivos',
        'pagos' => '\SRI\Models\Pagos',
        'notaCredito' => '\SRI\Models\NotaCredito',
        'detalleNotaCredito' => '\SRI\Models\DetallesNotaCredito',
        'comprobantePendiente' => '\SRI\Models\ComprobantePendiente',
        'mensajeGenerado' => '\SRI\Models\MensajeGenerado',
        'respuesta' => '\SRI\Models\Respuesta',
        'procesarComprobantePendiente' => '\SRI\Models\ProcesarComprobantePendiente',
        'procesarComprobantePendienteResponse' => '\SRI\Models\ProcesarComprobantePendienteRespuesta',
        'procesarComprobante' => '\SRI\Models\ProcesarComprobante',
        'procesarComprobanteResponse' => '\SRI\Models\ProcesarComprobanteRespuesta',
        'generarXMLPDF' => '\SRI\Models\GenerarXMLPDF',
        'generarXMLPDFResponse' => '\SRI\Models\GenerarXMLPDFRespuesta',
        'procesarXML' => '\SRI\Models\ProcesarXML',
        'procesarXMLResponse' => '\SRI\Models\ProcesarXMLRespuesta',
        'reenvioEmailParam' => '\SRI\Models\ReenvioMailParam',
        'reenviarEmail' => '\SRI\Models\ReenvioMail',
        'reenviarEmailResponse' => '\SRI\Models\ReenvioMailRespuesta',
        'procesarComprobanteLote' => '\SRI\Models\ProcesarComprobanteLote',
        'comprobanteLote' => '\SRI\Models\ComprobanteLote',
        'respuestaComprobanteLote' => '\SRI\Models\ComprobanteLoteRespuesta',
        'respuestaComprobanteConsultado' => '\SRI\Models\ComprobanteConsultadoRespuesta',
        'obtenerComprobante' => '\SRI\Models\ObtenerComprobante',
        'obtenerComprobanteResponse' => '\SRI\Models\ObtenerComprobanteRespuesta',
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
