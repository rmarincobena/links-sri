<?php

namespace App\SRI;

use SoapClient;
use App\Models\ReenvioMail;
use App\Models\ProcesarXML;
use App\Models\GenerarXMLPDF;
use App\Models\ProcesarProforma;
use App\Models\ProcesarComprobante;
use App\Models\ProcesarXMLRespuesta;
use App\Models\GenerarXMLPDFRespuesta;
use App\Models\ProcesarComprobanteLote;
use App\Models\ProcesarComprobantePendiente;
use App\Models\ProcesarComprobanteRespuesta;
use App\Models\ProcesarComprobanteLoteRespuesta;
use App\Models\ProcesarComprobantePendienteRespuesta;

class ComprobanteElectronico extends SoapClient
{
    private static $classmap = array(
        'factura' => '\App\Models\Factura',
        'proforma' => '\App\Models\Proforma',
        'liquidacionCompra' => '\App\Models\LiquidacionCompra',
        'comprobanteGeneral' => '\App\Models\ComprobanteGeneral',
        'detalleFactura' => '\App\Models\DetallesFactura',
        'detalleProforma' => '\App\Models\DetallesProforma',
        'detalleLiquidacionCompra' => '\App\Models\DetallesLiquidacionCompra',
        'detalleAdicional' => '\App\Models\DetallesAdicionales',
        'impuesto' => '\App\Models\Impuestos',
        'campoAdicional' => '\App\Models\DetallesAdicionales',
        'totalImpuesto' => '\App\Models\Impuestos',
        'configAplicacion' => '\App\Models\Configuracion',
        'configCorreo' => '\App\Models\ConfiguracionCorreo',
        'guiaRemision' => '\App\Models\GuiaRemision',
        'destinatario' => '\App\Models\Destinatario',
        'detalleGuiaRemision' => 'detalleGuiaRemision',
        'comprobanteRetencion' => '\App\Models\Retencion',
        'impuestoComprobanteRetencion' => '\App\Models\ImpuestoRetencion',
        'notaDebito' => '\App\Models\NotaDebito',
        'motivo' => '\App\Models\Motivos',
        'pagos' => '\App\Models\Pagos',
        'notaCredito' => '\App\Models\NotaCredito',
        'detalleNotaCredito' => '\App\Models\DetallesNotaCredito',
        'comprobantePendiente' => '\App\Models\ComprobantePendiente',
        'mensajeGenerado' => '\App\Models\MensajeGenerado',
        'respuesta' => '\App\Models\Respuesta',
        'procesarComprobantePendiente' => '\App\Models\ProcesarComprobantePendiente',
        'procesarComprobantePendienteResponse' => '\App\Models\ProcesarComprobantePendienteRespuesta',
        'procesarComprobante' => '\App\Models\ProcesarComprobante',
        'procesarComprobanteResponse' => '\App\Models\ProcesarComprobanteRespuesta',
        'generarXMLPDF' => '\App\Models\GenerarXMLPDF',
        'generarXMLPDFResponse' => '\App\Models\GenerarXMLPDFRespuesta',
        'procesarXML' => '\App\Models\ProcesarXML',
        'procesarXMLResponse' => '\App\Models\ProcesarXMLRespuesta',
        'reenvioEmailParam' => '\App\Models\ReenvioMailParam',
        'reenviarEmail' => '\App\Models\ReenvioMail',
        'reenviarEmailResponse' => '\App\Models\ReenvioMailRespuesta',
        'procesarComprobanteLote' => '\App\Models\ProcesarComprobanteLote',
        'comprobanteLote' => '\App\Models\ComprobanteLote',
        'respuestaComprobanteLote' => '\App\Models\ComprobanteLoteRespuesta',
        'respuestaComprobanteConsultado' => '\App\Models\ComprobanteConsultadoRespuesta',
        'obtenerComprobante' => '\App\Models\ObtenerComprobante',
        'obtenerComprobanteResponse' => '\App\Models\ObtenerComprobanteRespuesta',
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
