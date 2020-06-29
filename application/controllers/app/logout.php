<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

require_once 'dompdf/autoload.inc.php';

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url()."login", 'refresh');
        }
        $this->load->model('login_model');
        $this->load->model('beneficiario_model');
    }

    public function index()
    {
        $monto=$this->session->userdata('monto');
        $idpropietario = $this->session->userdata('idprop');
        $nombre = $this->session->userdata('nombre');
        $ap1 = $this->session->userdata('ap');
        $ap2 = $this->session->userdata('am');
        $curprfc = $this->session->userdata('curprfc');
        $patron = $this->session->userdata('empresa');
        $correo = $this->session->userdata('correousu');
        $nombrecompleto = $nombre;
        $nombrecompleto.=' ';
        $nombrecompleto.=$ap1;
        $nombrecompleto.=' ';
        $nombrecompleto.=$ap2;
        $dia=date('d');
        $mesnum=date('m');
        $mes='';
        $anio=date('Y');
        if($mesnum==1){
            $mes='Enero';
        }
        if($mesnum==2){
            $mes='Febrero';
        }
        if($mesnum==3){
            $mes='Marzo';
        }
        if($mesnum==4){
            $mes='Abril';
        }
        if($mesnum==5){
            $mes='Mayo';
        }
        if($mesnum==6){
            $mes='Junio';
        }
        if($mesnum==7){
            $mes='Julio';
        }
        if($mesnum==8){
            $mes='Agosto';
        }
        if($mesnum==9){
            $mes='Septiembre';
        }
        if($mesnum==10){
            $mes='Octubre';
        }
        if($mesnum==11){
            $mes='Noviembre';
        }
        if($mesnum==12){
            $mes='Diciembre';
        }
        //$correo = $this->session->userdata('correousu');
        $datos_monto=$this->login_model->monto($idpropietario);
        
        $monto_inicial=$monto;
        if (!is_null($datos_monto)) {
            $monto_final=0;
            foreach ($datos_monto as $monto_individual) {
                $monto_final = $monto_final + $monto_individual->precio;
            }
        } 
        else {
            $monto_final=$monto;
        }
        
        if($monto_final>$monto_inicial){
            $beneficiarios= $this->beneficiario_model->beneficiarios_prop_detalle($idpropietario);
            $cuerpo='<html><head></head><body>
            <style type="text/css">
            .ui-helper-center {
    text-align: center;
}
            </style>
                <div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                Ciudad de México a '.$dia.' de '.$mes.' de '.$anio.'
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">'.
                                $patron.' (el Patrón):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px" style="text-align: justify;">'.
                                $nombrecompleto.' con CURP/RFC '.$curprfc.'
(el Deudor), por así convenir a mis intereses y, conforme a lo dispuesto por el artículo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del Código Civil Federal, por este conducto, atento a la
relación de trabajo que tengo con el Patrón, le otorgo un mandato, para que en mi nombre y representación y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $'.$monto_final.' pesos 00
/100 M.N. (en adelante, los “Descuentos”), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row" style="text-align: center;">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">Telefono celular</th>
                            <th class="ui-helper-center">Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>';
                foreach ($beneficiarios as $beneficiario){
                $cuerpo.='
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">'.$beneficiario->telefono.'</th>
                            <th class="ui-helper-center">$'.$beneficiario->preciopaquete.'.00</th>
                        </tr>';
                }
                $cuerpo.='
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px" >
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el “Acreditante” ), documentados y aceptados en los TÉRMINOS Y
CONDICIONES de su APP denominada SÚPER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi nómina dentro de un plazo que no excederá de la fecha en que reciba mi salario. El presente
mandato se otorga al Patrón con el carácter de irrevocable, en términos del artículo 2,596 del Código Civil
Federal, por ser un medio para cumplir la obligación adquirida de pago contraída por el Deudor; y sólo podrá
revocarse conforme a los términos establecidos en los TÉRMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deberá realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciarán las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relación de trabajo entre el Deudor y el Patrón se termine o rescinda por cualquier causa, y
siempre y cuando así lo indique el Deudor, el Patrón realizará, de igual forma y, en ejecución del mandato, el
descuento al importe del finiquito o de la liquidación a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                <b>El deudor</b> 
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                            ___________________________
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            '.$nombrecompleto.'
                            </label>
                        </div>
                        </body></html>';
            
            $dompdf = new Dompdf();
            $dompdf->loadHtml($cuerpo);
            //$dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $pdf = $dompdf->output();

            $rutaGuardado = base_url() . "app/pdf/";
            $nombreArchivo = "prueba.pdf";
            file_put_contents('static/pdf/CartaDescuento.pdf', $pdf);
            
            
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
                //$mail->Host = 'mail.diatel.com.mx';                       // Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   // Enable SMTP authentication
                $mail->Username = 'norespondersuperrecargas@gmail.com';                     // SMTP username
                //$mail->Password = 'akpzbktkhirkjrvs';                               // SMTP password
                //$mail->Password = 'Armidas202020*';                               // SMTP password
                $mail->Password = 'zaznhekisdvtsgdb';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                //Recipients
                $mail->setFrom('norespondersuperrecargas@gmail.com', 'Super Recarga');
                $mail->addAddress($correo);
                //$mail->addAddress('noresponda@diatel.com.mx');
                //Cambiar a correo de rh de la empresa
                //$mail->addAddress('rulp@diatel.com.mx');
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');
                // Attachments
                //Para archivos
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                // Content
                $mail->addAttachment('static/pdf/CartaDescuento.pdf');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Confirmación de servicio';
//            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
                //$mail->Body = 'Correo de comprobación';
                $mail->Body = 'Correo de comprobación para servicio';
                $mail->CharSet = 'UTF-8';
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                //echo 'El mensaje se envió correctamente';
                $arreglo_sesiones_propietario = array(
                    'idprop' => FALSE,
                    'nombre' => FALSE,
                    'correousu' => FALSE,
                    'monto' => FALSE,
                    'is_login' => FALSE
                );
                $this->session->unset_userdata($arreglo_sesiones_propietario);
                $this->session->sess_destroy();
                //echo '<script languaje="javascript" type="text/javascript">window.close();</script>';
                redirect(base_url() . "usuario/prueba", 'refresh');
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        else{
            $arreglo_sesiones_propietario = array(
                'idprop' => FALSE,
                'nombre' => FALSE,
                'correousu' => FALSE,
                'monto' => FALSE,
                'is_login' => FALSE
            );
            $this->session->unset_userdata($arreglo_sesiones_propietario);
            $this->session->sess_destroy();
            redirect(base_url() . "usuario/prueba", 'refresh');
        }

//        $arreglo_sesiones_propietario = array(
//            'idprop' => FALSE,
//            'nombre' => FALSE,
//            'correousu' => FALSE,
//            'monto' => FALSE,
//            'is_login' => FALSE
//        );
//        $this->session->unset_userdata($arreglo_sesiones_propietario);
//        $this->session->sess_destroy();
//        redirect(base_url()."usuario/prueba", 'refresh');
    }

}

/* End of file logout.php */
/* Location: ./application/controllers/app/logout.php */
